@extends('layouts.template')

@section('title', 'Visi Misi')

@section('main')

@section('custom-css')
<style>
    .price-item {
        padding: 1rem;
        margin: .5rem;
        border-radius: 8px;
        color: #fff;
        background: linear-gradient(30deg, #606060 0%, #080808 70%);
        width: calc(25% - 1.2rem);
        position: relative;
        display: inline-block;
        vertical-align: top;
        text-align: left;
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        background-color: #606060;
        cursor: pointer;
    }

    .price-item-title {
        font-weight: bold;
        font-size: 1.2em;
        margin-bottom: 8px;
    }

    .price-item .price-item-price {
        font-size: 1.1em;
        font-weight: bold;
    }

    .price-item .price-item-increment {
        font-weight: bold;
    }

    .price-item .price-item-increment.down {
        color: red;
    }

    .price-item .price-item-increment.up {
        color: green;
    }

    .chart {
        width: 50px;
        height: 50px;
    }

    .d-flex {
        display: flex;
        flex-wrap: wrap;
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
                                    <input type="text" id="dateRange" class="form-control" placeholder="Start Date">
                                </div>
                            </div>
                        </div>
                        <!-- end bagian form buat filter panel dan tanggal -->

                        <!-- bagian kumpulan harga-harga bahan pokok -->
                        <div id="dataContainer" class="d-flex"></div>
                        <!-- end bagian kumpulan harga-harga bahan pokok -->

                        <!-- bagian discalimer -->
                        <span id="price-table-disclaimer">* Disclaimer: Lokasi pemantauan harga tingkat produsen
                            (provinsi/kabupaten kota) merupakan wilayah
                            sentra produksi yang ditetapkan berdasarkan sebaran tingkat produksi 3 tahun terakhir yang
                            dirilis oleh BPS
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
                </div>
            </div>
        </div>
    </div>
    <div id="historic-table-section">
        <div class="container">
            <h1 class="section-header">
                Perkembangan Harga<br />
                Pangan Pokok Strategis
            </h1>
            <!-- bagian tabelnya -->
            <div id="historic-table-container">
                <!-- bagian form buat filter panel -->
                <div class="row">
                    <div class="col-lg-12 col-sm-12 table-filter-form mb-2">
                        <span class="table-filter-label">Jenis Data Panel</span>
                        <select id="jenisDataPanelHistoris" class="form-select">
                            <option value="3">Pedagang Eceran</option>
                            <option value="2">Pedagang Grosir</option>
                            <option value="1">Produsen</option>                      
                        </select>
                    </div>
                </div>
                <!-- end bagian form buat filter panel -->
                <div class="row historis-item-row"></div>
    
                <!-- popup loading -->
                <div id="historicLoadingPopup" class="container-popup">
                    <div style="display: flex; flex-direction: column; align-items: center;">
                        <div class="loading-text">Memuat harga historis.</div>
                        <img src="https://panelharga.badanpangan.go.id/src/assets/img/panelharga-loading.svg" width="70px" />
                    </div>
                </div>
                <!-- end popup loading -->
            </div>
            <!-- end bagian harganya -->
            <div id="script-historic-section"></div>
        </div>
    </div>
    
    <span class="service-sh-1"><img src="assets/img/services/home-6-service-4.png" alt="image"></span>
    <span class="service-sh-2"><img src="assets/img/services/home-6-service-5.png" alt="image"></span>
</section>

<!-- Modal -->
<div class="modal fade" id="priceModal" tabindex="-1" aria-labelledby="priceModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="priceModalLabel">Harga Per Hari</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <h5 id="commodityName"></h5>
        <div id="priceDetails"></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
@endsection

@section('custom-js')
<!-- Include jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- Include flatpickr CSS and JS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script>
    $(document).ready(function() {
        const fetchHistoricData = (year) => {
            const jenisDataPanel = $('#jenisDataPanelHistoris').val();

            return $.ajax({
                url: `/api/get-data/${year}/${jenisDataPanel}`,
                type: 'GET'
            });
        };

        const sanitizeString = (str) => {
            return str.replace(/[^\w\s]/gi, '').replace(/\s+/g, '');
        };

        const generateHistoricPanel = (data) => {
            const cleanedKomoditas = sanitizeString(data.Komoditas);
            return `
            <div class="col-lg-6 col-md-6 col-sm-12 historis-item mb-4" data-komoditas='${JSON.stringify(data)}'>
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">${data.Komoditas}</h5>
                        <div id="chart-historic-${cleanedKomoditas}"></div>
                    </div>
                </div>
            </div>`;
        };

        const renderChartHistoric = (data2023, data2024) => {
            let categories = [];
            let seriesData2023 = [];
            let seriesData2024 = [];
            
            for (const [key, value] of Object.entries(data2023)) {
                if (key !== 'Komoditas') {
                    categories.push(key);
                    seriesData2023.push(value);
                }
            }

            for (const [key, value] of Object.entries(data2024)) {
                if (key !== 'Komoditas') {
                    seriesData2024.push(value);
                }
            }

            const options = {
                chart: {
                    type: 'line',
                    height: 350
                },
                series: [{
                    name: `${data2023.Komoditas} 2023`,
                    data: seriesData2023
                }, {
                    name: `${data2024.Komoditas} 2024`,
                    data: seriesData2024
                }],
                xaxis: {
                    categories: categories
                }
            };

            const cleanedKomoditas = sanitizeString(data2023.Komoditas);
            const chart = new ApexCharts(document.querySelector("#chart-historic-" + cleanedKomoditas), options);
            chart.render();
        };

        const fetchAndRenderCharts = () => {
            $.when(fetchHistoricData(2023), fetchHistoricData(2024)).done(function(response2023, response2024) {
                const data2023 = response2023[0].data;
                const data2024 = response2024[0].data;

                $('#historic-table-container .historis-item-row').empty(); // Clear previous data

                data2023.forEach((item2023, index) => {
                    const card = generateHistoricPanel(item2023);
                    $('#historic-table-container .historis-item-row').append(card);

                    const item2024 = data2024.find(item => item.Komoditas === item2023.Komoditas);
                    if (item2024) {
                        renderChartHistoric(item2023, item2024);
                    }
                });

                $("#historicLoadingPopup").fadeOut(0, function () {
                    $(this).hide();
                });
            }).fail(function(error) {
                console.error('Error:', error);
            });
        };

        // Fetch data when the page loads
        fetchAndRenderCharts();

        // Fetch data when the jenis data panel is changed
        $('#jenisDataPanelHistoris').change(function() {
            fetchAndRenderCharts();
        });
    });
</script>
<script>
    const backgroundPanel = [
        {
            nama: "GKP Tingkat Petani",
            img: "https://panelharga.badanpangan.go.id/src/assets/img/komoditas-ikon/gkp-tingkat-petani.png",
        },
        {
            nama: "GKP Tingkat Penggilingan",
            img: "https://panelharga.badanpangan.go.id/src/assets/img/komoditas-ikon/gkp-tingkat-penggilingan.png",
        },
        {
            nama: "GKG Tingkat Penggilingan",
            img: "https://panelharga.badanpangan.go.id/src/assets/img/komoditas-ikon/gkg-tingkat-penggilingan.png",
        },
        {
            nama: "Beras Medium Penggilingan",
            img: "https://panelharga.badanpangan.go.id/src/assets/img/komoditas-ikon/beras-medium-penggilingan.png",
        },
        {
            nama: "Beras Premium Penggilingan",
            img: "https://panelharga.badanpangan.go.id/src/assets/img/komoditas-ikon/beras-premium-penggilingan.png",
        },
        {
            nama: "Jagung Pipilan Kering",
            img: "https://panelharga.badanpangan.go.id/src/assets/img/komoditas-ikon/jagung-pipilan-kering.png",
        },
        {
            nama: "Kedelai Biji Kering (Lokal)",
            img: "https://panelharga.badanpangan.go.id/src/assets/img/komoditas-ikon/kedelai-biji-kering-lokal.png",
        },
        {
            nama: "Bawang Merah",
            img: "https://panelharga.badanpangan.go.id/src/assets/img/komoditas-ikon/bawang-merah.png",
        },
        {
            nama: "Cabai Merah Keriting",
            img: "https://panelharga.badanpangan.go.id/src/assets/img/komoditas-ikon/cabai-merah-keriting.png",
        },
        {
            nama: "Cabai Rawit Merah",
            img: "https://panelharga.badanpangan.go.id/src/assets/img/komoditas-ikon/cabai-rawit-merah.png",
        },
        {
            nama: "Sapi (Hidup)",
            img: "https://panelharga.badanpangan.go.id/src/assets/img/komoditas-ikon/sapi-hidup.png",
        },
        {
            nama: "Ayam Ras Pedaging (Hidup)",
            img: "https://panelharga.badanpangan.go.id/src/assets/img/komoditas-ikon/ayam-ras-pedaging-hidup.png",
        },
        {
            nama: "Telur Ayam Ras",
            img: "https://panelharga.badanpangan.go.id/src/assets/img/komoditas-ikon/telur-ayam-ras.png",
        },
        {
            nama: "Beras Premium",
            img: "https://panelharga.badanpangan.go.id/src/assets/img/komoditas-ikon/beras-premium.png",
        },
        {
            nama: "Beras Medium",
            img: "https://panelharga.badanpangan.go.id/src/assets/img/komoditas-ikon/beras-medium.png",
        },
        {
            nama: "Kedelai Biji Kering (Impor)",
            img: "https://panelharga.badanpangan.go.id/src/assets/img/komoditas-ikon/kedelai-biji-kering-impor.png",
        },
        {
            nama: "Bawang Putih Bonggol",
            img: "https://panelharga.badanpangan.go.id/src/assets/img/komoditas-ikon/bawang-putih-bonggol.png",
        },
        {
            nama: "Daging Sapi Murni",
            img: "https://panelharga.badanpangan.go.id/src/assets/img/komoditas-ikon/daging-sapi-murni.png",
        },
        {
            nama: "Daging Ayam Ras",
            img: "https://panelharga.badanpangan.go.id/src/assets/img/komoditas-ikon/daging-ayam-ras.png",
        },
        {
            nama: "Gula Konsumsi",
            img: "https://panelharga.badanpangan.go.id/src/assets/img/komoditas-ikon/gula-konsumsi.png",
        },
        {
            nama: "Minyak Goreng Kemasan Sederhana",
            img: "https://panelharga.badanpangan.go.id/src/assets/img/komoditas-ikon/minyak-goreng-kemasan-sederhana.png",
        },
        {
            nama: "Tepung Terigu (Curah)",
            img: "https://panelharga.badanpangan.go.id/src/assets/img/komoditas-ikon/tepung-terigu-curah.png",
        },
        {
            nama: "Minyak Goreng Curah",
            img: "https://panelharga.badanpangan.go.id/src/assets/img/komoditas-ikon/minyak-goreng-curah.png",
        },
        {
            nama: "Jagung Tk Peternak",
            img: "https://panelharga.badanpangan.go.id/src/assets/img/komoditas-ikon/jagung-tk-peternak.png",
        },
        {
            nama: "Ikan Kembung",
            img: "https://panelharga.badanpangan.go.id/src/assets/img/komoditas-ikon/ikan-kembung.png",
        },
        {
            nama: "Ikan Tongkol",
            img: "https://panelharga.badanpangan.go.id/src/assets/img/komoditas-ikon/ikan-tongkol.png",
        },
        {
            nama: "Ikan Bandeng",
            img: "https://panelharga.badanpangan.go.id/src/assets/img/komoditas-ikon/ikan-bandeng.png",
        },
    ];

    const renderIncrementColor = (color) => {
        return color === 'green' ? 'up' : 'down';
    };

    const renderIncrementArrow = (change) => {
        return change === 'up' ? 'arrow-up' : 'arrow-down';
    };

    const renderIncrementPrice = (color) => {
        return color === 'green' ? 'color: green;' : 'color: red;';
    };

    const convertToRupiah = (number) => {
        return number.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
    };

    const calculateGeomean = (data) => {
        const lastTwoValues = data.slice(-2);
        return lastTwoValues.reduce((a, b) => a + b, 0) / lastTwoValues.length;
    };

    const generateDataPanel = (data) => {
        const bgImage = backgroundPanel.find(x => x.nama === data.Komoditas)?.img || '';
        const geomean = calculateGeomean(Object.values(data).slice(1));
        const lastTwoValues = Object.values(data).slice(-2);
        const geomeanChange = ((lastTwoValues[1] - lastTwoValues[0]) / lastTwoValues[0]) * 100;
        const geomeanColor = geomeanChange > 0 ? 'green' : 'red';
        const geomeanPercentageChange = geomeanChange > 0 ? 'up' : 'down';
        
        return `
        <div class="modal-link col-lg-3 col-md-3 col-sm-12 price-item price-${renderIncrementColor(geomeanColor)}" data-komoditas='${JSON.stringify(data)}' style="background-image: url('${bgImage}');">
            <div style="display:flex;flex-direction:column;justify-content:space-between;align-items:flex-start;height:100%;">
                <span class="price-item-title">${data.Komoditas}</span>
                <div style="display:flex;justify-content:space-between;align-items:flex-end;width:100%;">
                    <div style="margin-right:12px;font-size:13px;">
                        <span class="price-item-price" style="background-color:transparent;">
                            Rp ${convertToRupiah(geomean)}
                        </span>
                        <span class="price-item-increment" style="${renderIncrementPrice(geomeanColor)}">
                            <i class="fa-solid fa-${renderIncrementArrow(geomeanPercentageChange)}" style="margin-right: 4px"></i>
                            ${geomeanChange.toFixed(2)}% - Rp ${convertToRupiah(Math.abs(lastTwoValues[1] - lastTwoValues[0]))}
                        </span>
                    </div>
                    <div class="chart" id="chart-${data.Komoditas}"></div>
                </div>
            </div>
        </div>`;
    };

    const showModal = (data) => {
        $('#commodityName').text(data.Komoditas);
        $('#priceDetails').html(Object.entries(data).filter(([key]) => key !== 'Komoditas').map(([date, price]) => `
            <p><strong>${date}:</strong> Rp ${convertToRupiah(price)}</p>
        `).join(''));
        $('#priceModal').modal('show');
    };

    $(document).ready(function() {
        // Initialize flatpickr date picker with range mode
        const dateRangePicker = $("#dateRange").flatpickr({
            mode: "range",
            dateFormat: "Y-m-d",
            onReady: function(selectedDates, dateStr, instance) {
                // Set default dates to last 7 days
                const today = new Date();
                const sevenDaysAgo = new Date(today);
                sevenDaysAgo.setDate(today.getDate() - 7);

                instance.setDate([sevenDaysAgo, today]);
            },
            onChange: function(selectedDates, dateStr, instance) {
                fetchData();
            }
        });

        const fetchData = () => {
            const jenisDataPanel = $('#jenisDataPanel').val();
            const dateRange = $('#dateRange').val().split(" to ");
            const startDate = dateRange[0];
            const endDate = dateRange[1];

            $.ajax({
                url: `{{ url('/') }}/api/data_nasional`,
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
                    $('#dataContainer').empty(); // Clear previous data
                    data.forEach(item => {
                        const card = generateDataPanel(item);
                        $('#dataContainer').append(card);
                    });

                    $("#nationalLoadingPopup").fadeOut(0, function () {
                        $(this).hide();
                    });

                    $('.price-item').on('click', function() {
                        const data = $(this).data('komoditas');
                        showModal(data);
                    });
                },
                error: function(error) {
                    console.error('Error:', error);
                }
            });
        };

        // Fetch data when page loads with default date range
        fetchData();

        // Fetch data when the date range or the jenis data panel is changed
        $('#jenisDataPanel').change(function() {
            fetchData();
        });
    });
</script>
@endsection
