@extends('layouts.template')

@section('title', 'Visi Misi')

@section('main')


@section('custom-css')
    <style>
        .modal-link {
            cursor: pointer;
        }

        .price-item {
            padding: 1rem;
            margin: .5rem;
            border-radius: 8px;
            color: #fff;
            /* background: linear-gradient(30deg, var(--grey-draw-1) 0%, var(--grey-draw-2) 70%); */
            background: linear-gradient(30deg, #606060 0%, #606060 70%);
            width: calc(25% - 1.2rem);
            position: relative;
            display: flex;
            flex-direction: column;
        }
    </style>
@endsection
@include('layouts.bedrumb')





<section class="rv-20-service_section">
    <div class="container">
        <div class="rv-inner-contact-info-cards">



            <div class="rv-inner-contact-info">

                <div class="rv-inner-contact-info__bottom">
                    <div class="container">
                        <h1 class="section-header">
                            Harga Rata Rata<br>
                            Nasional
                        </h1>

                        <div class="row">
                            <div class="col-lg-6 col-sm-12 table-filter-form">
                                <span class="table-filter-label">Jenis Data Panel</span>
                                <select id="jenisDataPanel" class="form-select">
                                    <option value="3" selected>Pedagang Eceran</option>
                                    <option value="2">Pedagang Grosir</option>
                                    <option value="1">Produsen</option>
                                </select>
                            </div>
            
                            <div class="col-lg-6 col-sm-12 table-filter-form">
                                <div>
                                    <label for="startDate">Start Date</label>
                                    <input type="text" id="startDate" placeholder="Start Date">
                                </div>
                                <div>
                                    <label for="endDate">End Date</label>
                                    <input type="text" id="endDate" placeholder="End Date">
                                </div>
                            </div>
                        </div>
                        <!-- end bagian form buat filter panel dan tanggal -->
            
                        <!-- bagian kumpulan harga-harga bahan pokok -->
                        <div id="dataContainer"></div>
                        <!-- end bagian kumpulan harga-harga bahan pokok -->
            
                       
            
                        <!-- bagian discalimer -->
                        <span id="price-table-disclaimer">* Disclaimer: Lokasi pemantauan harga tingkat produsen (provinsi/kabupaten kota) merupakan wilayah
                            sentra produksi yang ditetapkan berdasarkan sebaran tingkat produksi 3 tahun terakhir yang dirilis oleh BPS
                        </span>
                        <!-- end bagian discalimer -->
            
                        <!-- popup loading -->
                        <div id="nationalLoadingPopup" class="container-popup">
                            <div style="display: flex; flex-direction: column; align-items: center">
                                <div class="loading-text">Memuat data nasional.</div>
                                <img src="https://panelharga.badanpangan.go.id/src/assets/img/panelharga-loading.svg" width="70px" />
                            </div>
                        </div>


                        
                    </div>


                    <div id="dataContainer"></div>
                </div>
            </div>
        </div>
    </div>

    <span class="service-sh-1"><img src="assets/img/services/home-6-service-4.png" alt="image"></span>
    <span class="service-sh-2"><img src="assets/img/services/home-6-service-5.png" alt="image"></span>
</section>
@endsection




@section('custom-js')
 <!-- Include jQuery -->
 <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
 <!-- Include flatpickr CSS and JS -->
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
 <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script>
    $(document).ready(function() {
        // Initialize flatpickr date pickers
        const startDatePicker = $("#startDate").flatpickr();
        const endDatePicker = $("#endDate").flatpickr();

        // Set default dates to last 7 days
        const today = new Date();
        const sevenDaysAgo = new Date(today);
        sevenDaysAgo.setDate(today.getDate() - 7);

        const formatDate = (date) => {
            const d = new Date(date);
            let month = '' + (d.getMonth() + 1);
            let day = '' + d.getDate();
            const year = d.getFullYear();

            if (month.length < 2) month = '0' + month;
            if (day.length < 2) day = '0' + day;

            return [year, month, day].join('-');
        };

        $("#startDate").val(formatDate(sevenDaysAgo));
        $("#endDate").val(formatDate(today));

        const fetchData = () => {
            const jenisDataPanel = $('#jenisDataPanel').val();
            const startDate = $('#startDate').val();
            const endDate = $('#endDate').val();

            $.ajax({
                url: `http://127.0.0.1:8000/api/data_nasional`,
                type: 'GET',
                data: {
                    jenisDataPanel: jenisDataPanel,
                    startDate: startDate,
                    endDate: endDate
                    
                },
                beforeSend: function () {
            $("#nationalLoadingPopup").fadeIn(0, function () {
                $(this).show();
            });
        },
                success: function(data) {
                    console.log(data);
                    // You can add code here to display the data on the page
                    $('#dataContainer').empty(); // Clear previous data
                        data.data.forEach(item => {
                            const card = `<div class="card">
                                            <h3>${item.name}</h3>
                                            <p>Geomean: ${item.geomean}</p>
                                          </div>`;
                            $('#dataContainer').append(card);
                        });


                    $("#nationalLoadingPopup").fadeOut(0, function () {
                $(this).hide();
            });
                },
                error: function(error) {
                    console.error('Error:', error);
                }
            });
        };

        // Fetch data when page loads with default date range
        fetchData();

        // Fetch data when button is clicked
        $('#fetchDataButton').click(function() {
            fetchData();
        });
    });
</script>
@endsection
