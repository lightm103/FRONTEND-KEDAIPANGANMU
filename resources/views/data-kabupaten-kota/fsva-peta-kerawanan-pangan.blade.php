@extends('layouts.template')

@section('title', 'FSVA Data')

@section('main')

@include('layouts.bedrumb')
<section class="rv-20-service_section">
    <div class="container">
        <div class="rv-inner-contact-info-cards">
            <div class="rv-inner-contact-info">
                <div class="rv-inner-contact-info__bottom">
                    <div class="container">
                        <div class="row" id="fsva-cards">
                            <!-- Cards akan ditambahkan di sini oleh AJAX -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Modal -->
<div class="modal fade" id="detailModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Detail Data</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Content will be filled by AJAX -->
                <table class="table">
                    <thead>
                        <tr>
                            <th>Tahun</th>
                            <th>Komposit</th>
                            <th>NCPR</th>
                            <th>Kemiskinan (%)</th>
                            <th>Pengeluaran Pangan (%)</th>
                            <th>Tanpa Listrik (%)</th>
                            <th>Tanpa Air Bersih (%)</th>
                            <th>Lama Sekolah Perempuan (tahun)</th>
                            <th>Rasio Tenaga Kesehatan</th>
                            <th>Stunting (%)</th>
                        </tr>
                    </thead>
                    <tbody id="modal-body-content">
                        <!-- Dynamic content will be added here -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

@section('custom-js')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.0/js/bootstrap.bundle.min.js"></script>
<script>
    $(document).ready(function() {
        $.ajax({
            url: '/api/fsva-data',
            method: 'GET',
            success: function(response) {
                console.log('Response from API:', response);
                let seenCities = {}; // Object to keep track of cities

                Object.keys(response).forEach(year => {
                    response[year].forEach(function(item) {
                        let city = item['Kabupaten/Kota'];
                        if (!seenCities[city]) {
                            seenCities[city] = true;
                            $('#fsva-cards').append(`
                                <div class="col-md-4 mb-4">
                                    <div class="card" data-bs-toggle="modal" data-bs-target="#detailModal" data-city='${JSON.stringify(response)}' data-city-name='${city}'>
                                        <div class="card-body">
                                            <h5 class="card-title">${city}</h5>
                                        </div>
                                    </div>
                                </div>
                            `);
                        }
                    });
                });

                // Add click event to cards to display modal with data
                $('#fsva-cards .card').on('click', function() {
                    let cityName = $(this).data('city-name');
                    let modalContent = '';

                    Object.keys(response).forEach(year => {
                        let yearData = response[year].find(item => item['Kabupaten/Kota'] === cityName);
                        if (yearData) {
                            modalContent += `
                                <tr>
                                    <td>${year}</td>
                                    <td>${yearData['Komposit']}</td>
                                    <td>${yearData['NCPR']}</td>
                                    <td>${yearData['Kemiskinan (%)']}</td>
                                    <td>${yearData['Pengeluaran Pangan (%)']}</td>
                                    <td>${yearData['Tanpa Listrik (%)']}</td>
                                    <td>${yearData['Tanpa Air Bersih (%)']}</td>
                                    <td>${yearData['Lama Sekolah Perempuan (tahun)']}</td>
                                    <td>${yearData['Rasio Tenaga Kesehatan']}</td>
                                    <td>${yearData['Stunting (%)']}</td>
                                </tr>
                            `;
                        }
                    });

                    $('#modal-body-content').html(modalContent);
                });

            },
            error: function(xhr, status, error) {
                console.log('Error:', error); // Log error
                $('#fsva-cards').append('<p>There was an error fetching the data.</p>');
            }
        });
    });
</script>
@endsection
