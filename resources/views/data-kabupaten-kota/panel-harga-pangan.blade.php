@extends('layouts.template')

@section('title', 'Visi Misi')

@section('main')


@section('custom-css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
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

                        <!-- bagian tabelnya -->
                        <div id="price-table-container">
                            <!-- bagian form buat filter panel dan tanggal -->
                            <div class="row">
                                <div class="col-lg-6 col-sm-12 table-filter-form">
                                    <span class="table-filter-label">Jenis Data Panel</span>
                                    <select id="select-level-harga-nasional" class="form-select">
                                        <option value="3">Pedagang Eceran</option>
                                        <option value="2">Pedagang Grosir</option>
                                        <option value="1">Produsen</option>
                                    </select>
                                </div>

                                <div class="col-lg-6 col-sm-12 table-filter-form">
                                    <span class="table-filter-label">Tanggal</span>
                                    <div class="control">
                                        <input type="date" class="input" id="datepicker_nasional" data-is-range="true" placeholder="Pilih tanggal" />
                                    </div>
                                </div>
                            </div>
                            <!-- end bagian form buat filter panel dan tanggal -->

                            <!-- bagian kumpulan harga-harga bahan pokok -->
                            <div class="row price-item-row">
                            </div>

                            <!-- end bagian kumpulan harga-harga bahan pokok -->

                            <div id="catatanharga-data">
                                <div style="display:flex;margin-bottom:10px">
                                    <div style="display:flex;align-items:center;">
                                        <span
                                            style="width:10px;height:10px;border-radius:12px;background-color:#f14950;border:1px solid #fff;margin-right:3px;"></span>
                                        <span style="font-size:.8rem;margin-right:5px;">Harga Naik</span>
                                    </div>
                                    <div style="display:flex;align-items:center;">
                                        <span
                                            style="width:10px;height:10px;border-radius:12px;background-color:#7ab872;border:1px solid #fff;margin-right:3px;"></span>
                                        <span style="font-size:.8rem;margin-right:5px;">Harga Turun</span>
                                    </div>
                                    <div style="display:flex;align-items:center;">
                                        <span
                                            style="width:10px;height:10px;border-radius:12px;background-color:#1671bd;border:1px solid #fff;margin-right:3px;"></span>
                                        <span style="font-size:.8rem;margin-right:5px;">Harga Stabil</span>
                                    </div>
                                </div>
                            </div>

                            <!-- bagian discalimer -->
                            <span id="price-table-disclaimer">* Disclaimer: Lokasi pemantauan harga tingkat produsen
                                (provinsi/kabupaten kota) merupakan wilayah
                                sentra produksi yang ditetapkan berdasarkan sebaran tingkat produksi 3 tahun terakhir
                                yang dirilis oleh BPS
                            </span>
                            <!-- end bagian discalimer -->

                            <!-- popup loading -->
                            <div id="nationalLoadingPopup" class="container-popup" style="display: none;">
                                <div style="display: flex; flex-direction: column; align-items: center">
                                    <div class="loading-text">Memuat data nasional.</div>
                                    <img src="https://panelharga.badanpangan.go.id/src/assets/img/panelharga-loading.svg" width="70px">
                                </div>
                            </div>
                            <!-- end popup loading -->
                        </div>
                        <!-- end bagian harganya -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <span class="service-sh-1"><img src="assets/img/services/home-6-service-4.png" alt="image"></span>
    <span class="service-sh-2"><img src="assets/img/services/home-6-service-5.png" alt="image"></span>
</section>
@endsection




@section('custom-js')

<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script src="https://cdn.jsdelivr.net/npm/bulma-calendar@6.1.18/dist/js/bulma-calendar.min.js"></script>


<script>

    /** tanggal hari ini */
    var today = new Date();
    var dd = String(today.getDate()).padStart(2, '0');
    var mm = String(today.getMonth() + 1).padStart(2, '0');
    var yyyy = today.getFullYear();
    today = dd + '-' + mm + '-' + yyyy;
    
    /** tanggal minggu lalu */
    function getLastWeek() {
        var today = new Date();
        var lastWeek = new Date(today.getFullYear(), today.getMonth(), today.getDate() - 7);
        var dd = String(lastWeek.getDate()).padStart(2, '0');
        var mm = String(lastWeek.getMonth() + 1).padStart(2, '0');
        var yyyy = lastWeek.getFullYear();
        lastWeek = dd + '-' + mm + '-' + yyyy;
        return lastWeek;
    }
    
    /** default nilai */
    var initialDateNationalRange = getLastWeek() + ' - ' + today;
    var initialLevelHarga = '3';
    var initialDateProvinsi = today;
    
    /** fungsi buat konversi angka ke rupiah */
    const convertToRupiah = (val) => {
        return val.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
    };
    
    /** fungsi buat render warna panel harga nasional */
    const renderIncrementColor = (color) => {
        return color === "green" ? "up" : color === "red" ? "down" : "draw";
    };
    
    /** fungsi buat render harga panel harga nasional */
    const renderIncrementPrice = (color) => {
        return color === "green" ? "style='background-color:#008000;padding:0px 5px;border-radius:5px;'" : color === "red" ? "style='background-color:#ff0000;padding:0px 5px;border-radius:5px;'" : "style='background-color:#1671bd;padding:0px 5px;border-radius:5px;'";
    };
    
    /** fungsi buat render arah panah harga nasional */
    const renderIncrementArrow = (percent) => {
        return percent === "up" ? "arrow-up" : percent === "no_change" ? "minus" : "arrow-down";
    };
    
    const backgroundPanel = [
        // produsen
        {
            nama: "GKP Tingkat Petani",
            img: "https://panelharga.badanpangan.go.id/src/assets/img/komoditas-ikon/" + "gkp-tingkat-petani.png",
        },
        {
            nama: "GKP Tingkat Penggilingan",
            img: "https://panelharga.badanpangan.go.id/src/assets/img/komoditas-ikon/" + "gkp-tingkat-penggilingan.png",
        },
        {
            nama: "GKG Tingkat Penggilingan",
            img: "https://panelharga.badanpangan.go.id/src/assets/img/komoditas-ikon/" + "gkg-tingkat-penggilingan.png",
        },
        {
            nama: "Beras Medium Penggilingan",
            img: "https://panelharga.badanpangan.go.id/src/assets/img/komoditas-ikon/" + "beras-medium-penggilingan.png",
        },
        {
            nama: "Beras Premium Penggilingan",
            img: "https://panelharga.badanpangan.go.id/src/assets/img/komoditas-ikon/" + "beras-premium-penggilingan.png",
        },
        {
            nama: "Jagung Pipilan Kering",
            img: "https://panelharga.badanpangan.go.id/src/assets/img/komoditas-ikon/" + "jagung-pipilan-kering.png",
        },
        {
            nama: "Kedelai Biji Kering (Lokal)",
            img: "https://panelharga.badanpangan.go.id/src/assets/img/komoditas-ikon/" + "kedelai-biji-kering-lokal.png",
        },
        {
            nama: "Bawang Merah",
            img: "https://panelharga.badanpangan.go.id/src/assets/img/komoditas-ikon/" + "bawang-merah.png",
        },
        {
            nama: "Cabai Merah Keriting",
            img: "https://panelharga.badanpangan.go.id/src/assets/img/komoditas-ikon/" + "cabai-merah-keriting.png",
        },
        {
            nama: "Cabai Rawit Merah",
            img: "https://panelharga.badanpangan.go.id/src/assets/img/komoditas-ikon/" + "cabai-rawit-merah.png",
        },
        {
            nama: "Sapi (Hidup)",
            img: "https://panelharga.badanpangan.go.id/src/assets/img/komoditas-ikon/" + "sapi-hidup.png",
        },
        {
            nama: "Ayam Ras Pedaging (Hidup)",
            img: "https://panelharga.badanpangan.go.id/src/assets/img/komoditas-ikon/" + "ayam-ras-pedaging-hidup.png",
        },
        {
            nama: "Telur Ayam Ras",
            img: "https://panelharga.badanpangan.go.id/src/assets/img/komoditas-ikon/" + "telur-ayam-ras.png",
        },
        //Grosir
        {
            nama: "Beras Premium",
            img: "https://panelharga.badanpangan.go.id/src/assets/img/komoditas-ikon/" + "beras-premium.png",
        },
        {
            nama: "Beras Medium",
            img: "https://panelharga.badanpangan.go.id/src/assets/img/komoditas-ikon/" + "beras-medium.png",
        },
        {
            nama: "Kedelai Biji Kering (Impor)",
            img: "https://panelharga.badanpangan.go.id/src/assets/img/komoditas-ikon/" + "kedelai-biji-kering-impor.png",
        },
        {
            nama: "Bawang Putih Bonggol",
            img: "https://panelharga.badanpangan.go.id/src/assets/img/komoditas-ikon/" + "bawang-putih-bonggol.png",
        },
        {
            nama: "Daging Sapi Murni",
            img: "https://panelharga.badanpangan.go.id/src/assets/img/komoditas-ikon/" + "daging-sapi-murni.png",
        },
        {
            nama: "Daging Ayam Ras",
            img: "https://panelharga.badanpangan.go.id/src/assets/img/komoditas-ikon/" + "daging-ayam-ras.png",
        },
        {
            nama: "Gula Konsumsi",
            img: "https://panelharga.badanpangan.go.id/src/assets/img/komoditas-ikon/" + "gula-konsumsi.png",
        },
        {
            nama: "Minyak Goreng Kemasan Sederhana",
            img: "https://panelharga.badanpangan.go.id/src/assets/img/komoditas-ikon/" + "minyak-goreng-kemasan-sederhana.png",
        },
        {
            nama: "Tepung Terigu (Curah)",
            img: "https://panelharga.badanpangan.go.id/src/assets/img/komoditas-ikon/" + "tepung-terigu-curah.png",
        },
        {
            nama: "Minyak Goreng Curah",
            img: "https://panelharga.badanpangan.go.id/src/assets/img/komoditas-ikon/" + "minyak-goreng-curah.png",
        },
        {
            nama: "Jagung Tk Peternak",
            img: "https://panelharga.badanpangan.go.id/src/assets/img/komoditas-ikon/" + "jagung-tk-peternak.png",
        },
        {
            nama: "Ikan Kembung",
            img: "https://panelharga.badanpangan.go.id/src/assets/img/komoditas-ikon/" + "ikan-kembung.png",
        },
        {
            nama: "Ikan Tongkol",
            img: "https://panelharga.badanpangan.go.id/src/assets/img/komoditas-ikon/" + "ikan-tongkol.png",
        },
        {
            nama: "Ikan Bandeng",
            img: "https://panelharga.badanpangan.go.id/src/assets/img/komoditas-ikon/" + "ikan-bandeng.png",
        },
    ];
    
    /** generate kartu panel harga nasional dalam HTML */
    const generateDataPanel = (data) => {
        return `
        <div class="modal-link col-lg-3 col-md-3 col-sm-12 price-item price-${renderIncrementColor(data.geomean_color)}" data-komoditas-id="${data.id}" ${backgroundPanel.filter((x, i) => x.nama === data.name).length !==0 &&`style="--bg-img: url('${backgroundPanel.filter((x, i) => x.nama === data.name)[0].img}');"`} onclick="checkDetails(this)">
            <div style="display:flex;flex-direction:column;justify-content:space-between;align-items:flex-start;height:100%;">
                <span class="price-item-title">${data.name}</span>
                <div style="display:flex;justify-content:space-between;align-items:flex-end;width:100%;">
                    <div style="margin-right:12px;font-size:13px;">
                        <span class="price-item-price" style="background-color:transparent;">
                            Rp ${convertToRupiah(data.geomean)}
                        </span>
                        <span class="price-item-per">${data.satuan}</span>
                        <span class="price-item-increment" ${renderIncrementPrice(data.geomean_color)}>
                            <i class="fa-solid fa-${renderIncrementArrow(data.geomean_percentage_change)}" style="margin-right: 4px"></i>
                            ${data.geomean_percentage}% - Rp ${convertToRupiah(data.geomean_last_gap)}
                        </span>
                    </div>
                    <div class="chart" id="chart-${data.id}"></div>
                </div>
            </div>
        </div>`;
    };
    
    /** generate script grafik panel harga nasional dalam HTML */
    const renderChartScript = (chartData) => {
        return `
        let options${chartData.id} = {
            chart: {
                type: "area",
                width: 100,
                height: 60,
                sparkline: {
                    enabled: true,
                },
            },
            stroke: {
                curve: 'smooth',
                width: 2,
            },
            colors: ["#fff"],
            tooltip: {
                fixed: {
                    enabled: false,
                },
                x: {
                    show: false,
                },
                y: {
                    title: {
                        formatter: function (seriesName) {
                            return "";
                        },
                    },
                },
                marker: {
                    show: false,
                },
            },
            series: [
                {
                    data: ${JSON.stringify(chartData.geomean_last_6_days)},
                },
            ],
        };`;
    };
    
    /** render data provinsi */
    let nationalPriceData = [];
    
    /** fungsi reload data komoditas */
    $('#select-level-harga-nasional').change(function () {
        const selectedLevelHarga = $(this).val();
        const daterange = $("#datepicker_nasional").val();
        HargaNasional(daterange, selectedLevelHarga);
    });
    
    /** default tanggal data nasional */
    bulmaCalendar.attach("#datepicker_nasional", {
        displayMode: "dialog",
        headerPosition: "bottom",
        dateFormat: "dd-MM-yyyy",
        isRange: true,
        labelFrom: "Dari",
        labelTo: "Sampai",
        startDate: new Date(Date.now() - 7 * 24 * 60 * 60 * 1000),
        endDate: new Date(),
        maxDate: new Date(),
        allowSameDayRange: false,
    });
    
    /** on select calender data nasional */
    let elementDatepicker = document.querySelector("#datepicker_nasional");
    if (elementDatepicker) {
        elementDatepicker.bulmaCalendar.on("select", (datepicker) => {
            const newDate = datepicker.data.value();
            const selectedLevelHarga = $('#select-level-harga-nasional').val();
            HargaNasional(newDate, selectedLevelHarga);
        });
    }
    
    /** load data nasional */
    const HargaNasional = (sdate, levelHarga) => {
        const [startDate, endDate] = sdate.split(' - ');
        $.ajax({
            url: `https://panelharga.badanpangan.go.id/data/harga-nasional-range/${startDate}/${endDate}/${levelHarga}`,
            type: 'GET',
            dataType: 'json',
            beforeSend: function () {
                $("#nationalLoadingPopup").fadeIn(0, function () {
                    $(this).show();
                });
            },
            success: function (res) {
                nationalPriceData = res.data;
                document.querySelector(".price-item-row").innerHTML = "";
                var chartScript = "";
                nationalPriceData.forEach((n, index) => {
                    document.querySelector(".price-item-row").innerHTML += generateDataPanel(n);
                    chartScript += renderChartScript(n);
                });
    
                nationalPriceData.forEach((n, index) => {
                    chartScript += `new ApexCharts(document.querySelector("#chart-${n.id}"), options${n.id}).render();`;
                });
    
                eval(chartScript);
                $("#nationalLoadingPopup").fadeOut(0, function () {
                    $(this).hide();
                });
    
                const catatanhargaData = CatatanHarga(levelHarga);
                $('#catatanharga-data').html(catatanhargaData);
            }
        });
    }
    
    /**  on load */
    HargaNasional(initialDateNationalRange, initialLevelHarga);
    
    const CatatanHarga = (levelHarga) => {
        if(levelHarga==1){
            return `
                <div style="display:flex;margin-bottom:10px">
                    <div style="display:flex;align-items:center;">
                        <span style="width:10px;height:10px;border-radius:12px;background-color:#f14950;border:1px solid #fff;margin-right:3px;"></span>
                        <span style="font-size:.8rem;margin-right:5px;">Harga Turun</span>
                    </div>
                    <div style="display:flex;align-items:center;">
                        <span style="width:10px;height:10px;border-radius:12px;background-color:#7ab872;border:1px solid #fff;margin-right:3px;"></span>
                        <span style="font-size:.8rem;margin-right:5px;">Harga Naik</span>
                    </div>
                    <div style="display:flex;align-items:center;">
                        <span style="width:10px;height:10px;border-radius:12px;background-color:#1671bd;border:1px solid #fff;margin-right:3px;"></span>
                        <span style="font-size:.8rem;margin-right:5px;">Harga Stabil</span>
                    </div>
                </div>`;
        } else {
            return `
                <div style="display:flex;margin-bottom:10px">
                    <div style="display:flex;align-items:center;">
                        <span style="width:10px;height:10px;border-radius:12px;background-color:#f14950;border:1px solid #fff;margin-right:3px;"></span>
                        <span style="font-size:.8rem;margin-right:5px;">Harga Naik</span>
                    </div>
                    <div style="display:flex;align-items:center;">
                        <span style="width:10px;height:10px;border-radius:12px;background-color:#7ab872;border:1px solid #fff;margin-right:3px;"></span>
                        <span style="font-size:.8rem;margin-right:5px;">Harga Turun</span>
                    </div>
                    <div style="display:flex;align-items:center;">
                        <span style="width:10px;height:10px;border-radius:12px;background-color:#1671bd;border:1px solid #fff;margin-right:3px;"></span>
                        <span style="font-size:.8rem;margin-right:5px;">Harga Stabil</span>
                    </div>
                </div>`;
        }
    }
    
    // POPUP BY KOMODITAS
    
    /** render tabel body popup */
    const renderTableItem = (json) => {
        if (json.data.length) {
            return json.data.map((data) => {
                let summary = data.by_date.reduce((sum, value) => {
                    return (sum += value.geomean != "-" ? value.geomean : 0);
                }, 0);
                if (summary !== 0) {
                    return `
                    <tr>
                        <td>
                            ${renderItemStyle(data.type, data.name)}
                        </td>
                        ${renderCell(data.by_date, json.meta.date)}
                    </tr>`;
                }
            }).join("");
        }
        return "";
    };
    
    /** render data nasional table cell nama provinsi/kota/kabupaten popup */
    const renderItemStyle = (type, value) => {
        if (type !== "city") {
            return `<strong>${value}</strong>`;
        }
        return value;
    };
    
    /** render data nasional tabel head popup */
    const renderTableHead = (data) => {
        return data.map((tgl) => {
            return `
            <th style="background-color: #2a5715; color: #fff;">
                <div style="text-align: center;">${tgl}</div>
            </th>`;
        }).join("");
    };
    
    /** render data nasional table cell value popup */
    const renderCell = (data, date) => {
        return date.map((tgl) => {
            const findValue = data.find((v) => v.date === tgl);
            const geomeanValue = typeof findValue !== "undefined" ? findValue.geomean : "-";
            let x = geomeanValue;
            if (typeof geomeanValue === "number") {
                if (geomeanValue > 0) {
                    x = formatGeomeanPositive(geomeanValue);
                }
                x = formatGeomeanNeagative(Math.abs(geomeanValue));
            }
            return `
            <td>
                <p style="margin: 0; text-align: center;">${x}</p>
            </td>`;
        }).join("");
    };
    
    /** animasi loading data nasional popup */
    const nationalDetailsPopupTimeline = gsap.timeline({
        paused: true
    });
    nationalDetailsPopupTimeline.to("#nationalDetailsPopup", {
        duration: 0.1,
        display: "grid",
    }, "<");
    nationalDetailsPopupTimeline.to("#nationalDetailsPopup", {
        duration: 0.4,
        opacity: 1,
    }, "<");
    nationalDetailsPopupTimeline.from("#nationalDetailsPopup .popup-content", {
        duration: 0.3,
        opacity: 0,
        y: -100,
    }, ".1");
    nationalDetailsPopupTimeline.reverse();
    
    /** render data nasional on click popup */
    const checkDetails = async (element) => {
        
        document.querySelector("#nationalDetailsLoadingPopup").style.display = "grid";
        nationalDetailsPopupTimeline.reversed(!nationalDetailsPopupTimeline.reversed());
    
        const komoditas = element.getAttribute("data-komoditas-id");
        const levelHargaNasional = $('#select-level-harga-nasional').val();
        const rentangTanggal = $("#datepicker_nasional").val();
    
        $.ajax({
            url: `data/harga-nasional-by-komoditas/${rentangTanggal}/${levelHargaNasional}/${komoditas}`,
            type: 'GET',
            dataType: 'json',
            beforeSend: function () {
                document.querySelector("#nationalDetailsLoadingPopup").style.display = "grid";
            },
            success: function (res) {
                const nationalDetailsTable = document.querySelector(
                    "#national-popup-details-table"
                );
    
                document.querySelector(
                    "#nationalDetailsPopup .popup-header-text"
                ).innerHTML = element.children[0].children[0].innerText;
    
                nationalDetailsTable.innerHTML = `
                <thead>
                    <tr>
                        <th style="background-color: #2a5715; color: #fff;">
                            <div>
                                Pasar
                            </div>
                        </th>
                        ${renderTableHead(res.meta.date_str)}
                    </tr>
                </thead>
    
                <tbody>
                    ${renderTableItem(res)}
                </tbody>`;
                document.querySelector("#nationalDetailsLoadingPopup").style.display = "none";
            }
        });
    };
    
    /** close data nasional popup */
    document.querySelector("#nationalDetailCloseButton").addEventListener("click", (e) => {
        e.preventDefault();
        nationalDetailsPopupTimeline.reversed(!nationalDetailsPopupTimeline.reversed());
    });
    
    /** close data nasional popup */
    document.querySelector("#buttonNationalClose").addEventListener("click", (e) => {
        e.preventDefault();
        nationalDetailsPopupTimeline.reversed(!nationalDetailsPopupTimeline.reversed());
    });
    
    </script>
    
@endsection
