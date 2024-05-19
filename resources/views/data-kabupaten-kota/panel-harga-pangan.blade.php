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

                               
                            </div>
                            <!-- end bagian form buat filter panel dan tanggal -->

                            <!-- bagian kumpulan harga-harga bahan pokok -->
                            
                            <div class="row price-item-row">
                                <div class="modal-link col-lg-3 col-md-3 col-sm-12 price-item price-up"
                                    data-komoditas-id="27"
                                    style="--bg-img: url('https://panelharga.badanpangan.go.id/src/assets/img/komoditas-ikon/beras-premium.png');"
                                    onclick="checkDetails(this)">
                                    <div
                                        style="display:flex;flex-direction:column;justify-content:space-between;align-items:flex-start;height:100%;">
                                        <span class="price-item-title">Beras Premium</span>
                                        <div
                                            style="display:flex;justify-content:space-between;align-items:flex-end;width:100%;">
                                            <div style="margin-right:12px;font-size:13px;">
                                                <span class="price-item-price" style="background-color:transparent;">
                                                    Rp 15.490
                                                </span>
                                                <span class="price-item-per">Rp./Kg</span>
                                                <span class="price-item-increment"
                                                    style="background-color:#008000;padding:0px 5px;border-radius:5px;">
                                                    <i class="fa-solid fa-arrow-down" style="margin-right: 4px"></i>
                                                    -0.06% - Rp -10
                                                </span>
                                            </div>
                                            <div class="chart" id="chart-27" style="min-height: 60px;">
                                                <div id="apexchartsweabnktj"
                                                    class="apexcharts-canvas apexchartsweabnktj apexcharts-theme-light"
                                                    style="width: 100px; height: 60px;"><svg id="SvgjsSvg2472"
                                                        width="100" height="60"
                                                        xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                                        xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg"
                                                        xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                                        style="background: transparent;">
                                                        <foreignObject x="0" y="0" width="100" height="60">
                                                            <div class="apexcharts-legend"
                                                                xmlns="http://www.w3.org/1999/xhtml"
                                                                style="max-height: 30px;"></div>
                                                        </foreignObject>
                                                        <rect id="SvgjsRect2476" width="0" height="0" x="0"
                                                            y="0" rx="0" ry="0" opacity="1"
                                                            stroke-width="0" stroke="none" stroke-dasharray="0"
                                                            fill="#fefefe"></rect>
                                                        <g id="SvgjsG2510" class="apexcharts-yaxis" rel="0"
                                                            transform="translate(-18, 0)"></g>
                                                        <g id="SvgjsG2474"
                                                            class="apexcharts-inner apexcharts-graphical"
                                                            transform="translate(0, 1)">
                                                            <defs id="SvgjsDefs2473">
                                                                <clipPath id="gridRectMaskweabnktj">
                                                                    <rect id="SvgjsRect2478" width="106"
                                                                        height="64" x="-3" y="-3" rx="0"
                                                                        ry="0" opacity="1"
                                                                        stroke-width="0" stroke="none"
                                                                        stroke-dasharray="0" fill="#fff"></rect>
                                                                </clipPath>
                                                                <clipPath id="forecastMaskweabnktj"></clipPath>
                                                                <clipPath id="nonForecastMaskweabnktj"></clipPath>
                                                                <clipPath id="gridRectMarkerMaskweabnktj">
                                                                    <rect id="SvgjsRect2479" width="104"
                                                                        height="62" x="-2" y="-2" rx="0"
                                                                        ry="0" opacity="1"
                                                                        stroke-width="0" stroke="none"
                                                                        stroke-dasharray="0" fill="#fff"></rect>
                                                                </clipPath>
                                                                <linearGradient id="SvgjsLinearGradient2484"
                                                                    x1="0" y1="0" x2="0"
                                                                    y2="1">
                                                                    <stop id="SvgjsStop2485" stop-opacity="0.65"
                                                                        stop-color="rgba(255,255,255,0.65)"
                                                                        offset="0"></stop>
                                                                    <stop id="SvgjsStop2486" stop-opacity="0.5"
                                                                        stop-color="rgba(128,135,255,0.5)"
                                                                        offset="1"></stop>
                                                                    <stop id="SvgjsStop2487" stop-opacity="0.5"
                                                                        stop-color="rgba(128,135,255,0.5)"
                                                                        offset="1"></stop>
                                                                </linearGradient>
                                                            </defs>
                                                            <line id="SvgjsLine2477" x1="0" y1="0"
                                                                x2="0" y2="58" stroke="#b6b6b6"
                                                                stroke-dasharray="3" stroke-linecap="butt"
                                                                class="apexcharts-xcrosshairs" x="0" y="0"
                                                                width="1" height="58" fill="#b1b9c4"
                                                                filter="none" fill-opacity="0.9" stroke-width="1">
                                                            </line>
                                                            <g id="SvgjsG2490" class="apexcharts-grid">
                                                                <g id="SvgjsG2491"
                                                                    class="apexcharts-gridlines-horizontal"
                                                                    style="display: none;">
                                                                    <line id="SvgjsLine2494" x1="0"
                                                                        y1="0" x2="100" y2="0"
                                                                        stroke="#e0e0e0" stroke-dasharray="0"
                                                                        stroke-linecap="butt"
                                                                        class="apexcharts-gridline"></line>
                                                                    <line id="SvgjsLine2495" x1="0"
                                                                        y1="58" x2="100" y2="58"
                                                                        stroke="#e0e0e0" stroke-dasharray="0"
                                                                        stroke-linecap="butt"
                                                                        class="apexcharts-gridline"></line>
                                                                </g>
                                                                <g id="SvgjsG2492"
                                                                    class="apexcharts-gridlines-vertical"
                                                                    style="display: none;"></g>
                                                                <line id="SvgjsLine2497" x1="0"
                                                                    y1="58" x2="100" y2="58"
                                                                    stroke="transparent" stroke-dasharray="0"
                                                                    stroke-linecap="butt"></line>
                                                                <line id="SvgjsLine2496" x1="0"
                                                                    y1="1" x2="0" y2="58"
                                                                    stroke="transparent" stroke-dasharray="0"
                                                                    stroke-linecap="butt"></line>
                                                            </g>
                                                            <g id="SvgjsG2493" class="apexcharts-grid-borders"
                                                                style="display: none;"></g>
                                                            <g id="SvgjsG2480"
                                                                class="apexcharts-area-series apexcharts-plot-series">
                                                                <g id="SvgjsG2481" class="apexcharts-series"
                                                                    zIndex="0" seriesName="series-1"
                                                                    data:longestSeries="true" rel="1"
                                                                    data:realIndex="0">
                                                                    <path id="SvgjsPath2488"
                                                                        d="M0 0C4.999999999999999 0 9.285714285714285 19.33333333333394 14.285714285714285 19.33333333333394C19.285714285714285 19.33333333333394 23.57142857142857 0 28.57142857142857 0C33.57142857142857 0 37.857142857142854 9.66666666666788 42.857142857142854 9.66666666666788C47.857142857142854 9.66666666666788 52.14285714285714 38.66666666666788 57.14285714285714 38.66666666666788C62.14285714285714 38.66666666666788 66.42857142857142 9.66666666666788 71.42857142857142 9.66666666666788C76.42857142857142 9.66666666666788 80.71428571428571 48.33333333333394 85.71428571428571 48.33333333333394C90.71428571428571 48.33333333333394 94.99999999999999 58 99.99999999999999 58C99.99999999999999 58 99.99999999999999 58 99.99999999999999 58L0 58C0 58 0 0 0 0 "
                                                                        fill="url(#SvgjsLinearGradient2484)"
                                                                        fill-opacity="1" stroke-opacity="1"
                                                                        stroke-linecap="butt" stroke-width="0"
                                                                        stroke-dasharray="0" class="apexcharts-area"
                                                                        index="0"
                                                                        clip-path="url(#gridRectMaskweabnktj)"
                                                                        pathTo="M 0 0C 4.999999999999999 0 9.285714285714285 19.33333333333394 14.285714285714285 19.33333333333394C 19.285714285714285 19.33333333333394 23.57142857142857 0 28.57142857142857 0C 33.57142857142857 0 37.857142857142854 9.66666666666788 42.857142857142854 9.66666666666788C 47.857142857142854 9.66666666666788 52.14285714285714 38.66666666666788 57.14285714285714 38.66666666666788C 62.14285714285714 38.66666666666788 66.42857142857142 9.66666666666788 71.42857142857142 9.66666666666788C 76.42857142857142 9.66666666666788 80.71428571428571 48.33333333333394 85.71428571428571 48.33333333333394C 90.71428571428571 48.33333333333394 94.99999999999999 58 99.99999999999999 58C 99.99999999999999 58 99.99999999999999 58 99.99999999999999 58 L 0 58z"
                                                                        pathFrom="M 0 15031.666666666666 L 0 15031.666666666666 L 14.285714285714285 15031.666666666666 L 28.57142857142857 15031.666666666666 L 42.857142857142854 15031.666666666666 L 57.14285714285714 15031.666666666666 L 71.42857142857142 15031.666666666666 L 85.71428571428571 15031.666666666666 L 99.99999999999999 15031.666666666666 L 0 15031.666666666666">
                                                                    </path>
                                                                    <path id="SvgjsPath2489"
                                                                        d="M0 0C4.999999999999999 0 9.285714285714285 19.33333333333394 14.285714285714285 19.33333333333394C19.285714285714285 19.33333333333394 23.57142857142857 0 28.57142857142857 0C33.57142857142857 0 37.857142857142854 9.66666666666788 42.857142857142854 9.66666666666788C47.857142857142854 9.66666666666788 52.14285714285714 38.66666666666788 57.14285714285714 38.66666666666788C62.14285714285714 38.66666666666788 66.42857142857142 9.66666666666788 71.42857142857142 9.66666666666788C76.42857142857142 9.66666666666788 80.71428571428571 48.33333333333394 85.71428571428571 48.33333333333394C90.71428571428571 48.33333333333394 94.99999999999999 58 99.99999999999999 58C99.99999999999999 58 99.99999999999999 58 99.99999999999999 58 "
                                                                        fill="none" fill-opacity="1"
                                                                        stroke="#ffffff" stroke-opacity="1"
                                                                        stroke-linecap="butt" stroke-width="2"
                                                                        stroke-dasharray="0" class="apexcharts-area"
                                                                        index="0"
                                                                        clip-path="url(#gridRectMaskweabnktj)"
                                                                        pathTo="M 0 0C 4.999999999999999 0 9.285714285714285 19.33333333333394 14.285714285714285 19.33333333333394C 19.285714285714285 19.33333333333394 23.57142857142857 0 28.57142857142857 0C 33.57142857142857 0 37.857142857142854 9.66666666666788 42.857142857142854 9.66666666666788C 47.857142857142854 9.66666666666788 52.14285714285714 38.66666666666788 57.14285714285714 38.66666666666788C 62.14285714285714 38.66666666666788 66.42857142857142 9.66666666666788 71.42857142857142 9.66666666666788C 76.42857142857142 9.66666666666788 80.71428571428571 48.33333333333394 85.71428571428571 48.33333333333394C 90.71428571428571 48.33333333333394 94.99999999999999 58 99.99999999999999 58"
                                                                        pathFrom="M 0 15031.666666666666 L 0 15031.666666666666 L 14.285714285714285 15031.666666666666 L 28.57142857142857 15031.666666666666 L 42.857142857142854 15031.666666666666 L 57.14285714285714 15031.666666666666 L 71.42857142857142 15031.666666666666 L 85.71428571428571 15031.666666666666 L 99.99999999999999 15031.666666666666"
                                                                        fill-rule="evenodd"></path>
                                                                    <g id="SvgjsG2482"
                                                                        class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown"
                                                                        data:realIndex="0">
                                                                        <g class="apexcharts-series-markers">
                                                                            <circle id="SvgjsCircle2514" r="0"
                                                                                cx="0" cy="0"
                                                                                class="apexcharts-marker wozep824l no-pointer-events"
                                                                                stroke="#ffffff" fill="#ffffff"
                                                                                fill-opacity="1" stroke-width="2"
                                                                                stroke-opacity="0.9"
                                                                                default-marker-size="0"></circle>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                                <g id="SvgjsG2483" class="apexcharts-datalabels"
                                                                    data:realIndex="0"></g>
                                                            </g>
                                                            <line id="SvgjsLine2498" x1="0" y1="0"
                                                                x2="100" y2="0" stroke="#b6b6b6"
                                                                stroke-dasharray="0" stroke-width="1"
                                                                stroke-linecap="butt" class="apexcharts-ycrosshairs">
                                                            </line>
                                                            <line id="SvgjsLine2499" x1="0" y1="0"
                                                                x2="100" y2="0" stroke-dasharray="0"
                                                                stroke-width="0" stroke-linecap="butt"
                                                                class="apexcharts-ycrosshairs-hidden"></line>
                                                            <g id="SvgjsG2500" class="apexcharts-xaxis"
                                                                transform="translate(0, 0)">
                                                                <g id="SvgjsG2501" class="apexcharts-xaxis-texts-g"
                                                                    transform="translate(0, -4)"></g>
                                                            </g>
                                                            <g id="SvgjsG2511"
                                                                class="apexcharts-yaxis-annotations apexcharts-hidden-element-shown">
                                                            </g>
                                                            <g id="SvgjsG2512"
                                                                class="apexcharts-xaxis-annotations apexcharts-hidden-element-shown">
                                                            </g>
                                                            <g id="SvgjsG2513"
                                                                class="apexcharts-point-annotations apexcharts-hidden-element-shown">
                                                            </g>
                                                        </g>
                                                    </svg>
                                                    <div class="apexcharts-tooltip apexcharts-theme-light">
                                                        <div class="apexcharts-tooltip-series-group"
                                                            style="order: 1;"><span class="apexcharts-tooltip-marker"
                                                                style="background-color: rgb(255, 255, 255);"></span>
                                                            <div class="apexcharts-tooltip-text"
                                                                style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                                <div class="apexcharts-tooltip-y-group"><span
                                                                        class="apexcharts-tooltip-text-y-label"></span><span
                                                                        class="apexcharts-tooltip-text-y-value"></span>
                                                                </div>
                                                                <div class="apexcharts-tooltip-goals-group"><span
                                                                        class="apexcharts-tooltip-text-goals-label"></span><span
                                                                        class="apexcharts-tooltip-text-goals-value"></span>
                                                                </div>
                                                                <div class="apexcharts-tooltip-z-group"><span
                                                                        class="apexcharts-tooltip-text-z-label"></span><span
                                                                        class="apexcharts-tooltip-text-z-value"></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                                        <div class="apexcharts-yaxistooltip-text"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-link col-lg-3 col-md-3 col-sm-12 price-item price-down"
                                    data-komoditas-id="28"
                                    style="--bg-img: url('https://panelharga.badanpangan.go.id/src/assets/img/komoditas-ikon/beras-medium.png');"
                                    onclick="checkDetails(this)">
                                    <div
                                        style="display:flex;flex-direction:column;justify-content:space-between;align-items:flex-start;height:100%;">
                                        <span class="price-item-title">Beras Medium</span>
                                        <div
                                            style="display:flex;justify-content:space-between;align-items:flex-end;width:100%;">
                                            <div style="margin-right:12px;font-size:13px;">
                                                <span class="price-item-price" style="background-color:transparent;">
                                                    Rp 13.470
                                                </span>
                                                <span class="price-item-per">Rp./Kg</span>
                                                <span class="price-item-increment"
                                                    style="background-color:#ff0000;padding:0px 5px;border-radius:5px;">
                                                    <i class="fa-solid fa-arrow-up" style="margin-right: 4px"></i>
                                                    0.07% - Rp 10
                                                </span>
                                            </div>
                                            <div class="chart" id="chart-28" style="min-height: 60px;">
                                                <div id="apexcharts6wozusd4"
                                                    class="apexcharts-canvas apexcharts6wozusd4 apexcharts-theme-light"
                                                    style="width: 100px; height: 60px;"><svg id="SvgjsSvg2515"
                                                        width="100" height="60"
                                                        xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                                        xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg"
                                                        xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                                        style="background: transparent;">
                                                        <foreignObject x="0" y="0" width="100" height="60">
                                                            <div class="apexcharts-legend"
                                                                xmlns="http://www.w3.org/1999/xhtml"
                                                                style="max-height: 30px;"></div>
                                                        </foreignObject>
                                                        <rect id="SvgjsRect2519" width="0" height="0" x="0"
                                                            y="0" rx="0" ry="0" opacity="1"
                                                            stroke-width="0" stroke="none" stroke-dasharray="0"
                                                            fill="#fefefe"></rect>
                                                        <g id="SvgjsG2553" class="apexcharts-yaxis" rel="0"
                                                            transform="translate(-18, 0)"></g>
                                                        <g id="SvgjsG2517"
                                                            class="apexcharts-inner apexcharts-graphical"
                                                            transform="translate(0, 1)">
                                                            <defs id="SvgjsDefs2516">
                                                                <clipPath id="gridRectMask6wozusd4">
                                                                    <rect id="SvgjsRect2521" width="106"
                                                                        height="64" x="-3" y="-3" rx="0"
                                                                        ry="0" opacity="1"
                                                                        stroke-width="0" stroke="none"
                                                                        stroke-dasharray="0" fill="#fff"></rect>
                                                                </clipPath>
                                                                <clipPath id="forecastMask6wozusd4"></clipPath>
                                                                <clipPath id="nonForecastMask6wozusd4"></clipPath>
                                                                <clipPath id="gridRectMarkerMask6wozusd4">
                                                                    <rect id="SvgjsRect2522" width="104"
                                                                        height="62" x="-2" y="-2" rx="0"
                                                                        ry="0" opacity="1"
                                                                        stroke-width="0" stroke="none"
                                                                        stroke-dasharray="0" fill="#fff"></rect>
                                                                </clipPath>
                                                                <linearGradient id="SvgjsLinearGradient2527"
                                                                    x1="0" y1="0" x2="0"
                                                                    y2="1">
                                                                    <stop id="SvgjsStop2528" stop-opacity="0.65"
                                                                        stop-color="rgba(255,255,255,0.65)"
                                                                        offset="0"></stop>
                                                                    <stop id="SvgjsStop2529" stop-opacity="0.5"
                                                                        stop-color="rgba(128,135,255,0.5)"
                                                                        offset="1"></stop>
                                                                    <stop id="SvgjsStop2530" stop-opacity="0.5"
                                                                        stop-color="rgba(128,135,255,0.5)"
                                                                        offset="1"></stop>
                                                                </linearGradient>
                                                            </defs>
                                                            <line id="SvgjsLine2520" x1="0" y1="0"
                                                                x2="0" y2="58" stroke="#b6b6b6"
                                                                stroke-dasharray="3" stroke-linecap="butt"
                                                                class="apexcharts-xcrosshairs" x="0" y="0"
                                                                width="1" height="58" fill="#b1b9c4"
                                                                filter="none" fill-opacity="0.9" stroke-width="1">
                                                            </line>
                                                            <g id="SvgjsG2533" class="apexcharts-grid">
                                                                <g id="SvgjsG2534"
                                                                    class="apexcharts-gridlines-horizontal"
                                                                    style="display: none;">
                                                                    <line id="SvgjsLine2537" x1="0"
                                                                        y1="0" x2="100" y2="0"
                                                                        stroke="#e0e0e0" stroke-dasharray="0"
                                                                        stroke-linecap="butt"
                                                                        class="apexcharts-gridline"></line>
                                                                    <line id="SvgjsLine2538" x1="0"
                                                                        y1="58" x2="100" y2="58"
                                                                        stroke="#e0e0e0" stroke-dasharray="0"
                                                                        stroke-linecap="butt"
                                                                        class="apexcharts-gridline"></line>
                                                                </g>
                                                                <g id="SvgjsG2535"
                                                                    class="apexcharts-gridlines-vertical"
                                                                    style="display: none;"></g>
                                                                <line id="SvgjsLine2540" x1="0"
                                                                    y1="58" x2="100" y2="58"
                                                                    stroke="transparent" stroke-dasharray="0"
                                                                    stroke-linecap="butt"></line>
                                                                <line id="SvgjsLine2539" x1="0"
                                                                    y1="1" x2="0" y2="58"
                                                                    stroke="transparent" stroke-dasharray="0"
                                                                    stroke-linecap="butt"></line>
                                                            </g>
                                                            <g id="SvgjsG2536" class="apexcharts-grid-borders"
                                                                style="display: none;"></g>
                                                            <g id="SvgjsG2523"
                                                                class="apexcharts-area-series apexcharts-plot-series">
                                                                <g id="SvgjsG2524" class="apexcharts-series"
                                                                    zIndex="0" seriesName="series-1"
                                                                    data:longestSeries="true" rel="1"
                                                                    data:realIndex="0">
                                                                    <path id="SvgjsPath2531"
                                                                        d="M0 0C4.999999999999999 0 9.285714285714285 29 14.285714285714285 29C19.285714285714285 29 23.57142857142857 14.5 28.57142857142857 14.5C33.57142857142857 14.5 37.857142857142854 21.75 42.857142857142854 21.75C47.857142857142854 21.75 52.14285714285714 43.5 57.14285714285714 43.5C62.14285714285714 43.5 66.42857142857142 58 71.42857142857142 58C76.42857142857142 58 80.71428571428571 58 85.71428571428571 58C90.71428571428571 58 94.99999999999999 50.75 99.99999999999999 50.75C99.99999999999999 50.75 99.99999999999999 50.75 99.99999999999999 58L0 58C0 58 0 0 0 0 "
                                                                        fill="url(#SvgjsLinearGradient2527)"
                                                                        fill-opacity="1" stroke-opacity="1"
                                                                        stroke-linecap="butt" stroke-width="0"
                                                                        stroke-dasharray="0" class="apexcharts-area"
                                                                        index="0"
                                                                        clip-path="url(#gridRectMask6wozusd4)"
                                                                        pathTo="M 0 0C 4.999999999999999 0 9.285714285714285 29 14.285714285714285 29C 19.285714285714285 29 23.57142857142857 14.5 28.57142857142857 14.5C 33.57142857142857 14.5 37.857142857142854 21.75 42.857142857142854 21.75C 47.857142857142854 21.75 52.14285714285714 43.5 57.14285714285714 43.5C 62.14285714285714 43.5 66.42857142857142 58 71.42857142857142 58C 76.42857142857142 58 80.71428571428571 58 85.71428571428571 58C 90.71428571428571 58 94.99999999999999 50.75 99.99999999999999 50.75C 99.99999999999999 50.75 99.99999999999999 50.75 99.99999999999999 58 L 0 58z"
                                                                        pathFrom="M 0 9816.5 L 0 9816.5 L 14.285714285714285 9816.5 L 28.57142857142857 9816.5 L 42.857142857142854 9816.5 L 57.14285714285714 9816.5 L 71.42857142857142 9816.5 L 85.71428571428571 9816.5 L 99.99999999999999 9816.5 L 0 9816.5">
                                                                    </path>
                                                                    <path id="SvgjsPath2532"
                                                                        d="M0 0C4.999999999999999 0 9.285714285714285 29 14.285714285714285 29C19.285714285714285 29 23.57142857142857 14.5 28.57142857142857 14.5C33.57142857142857 14.5 37.857142857142854 21.75 42.857142857142854 21.75C47.857142857142854 21.75 52.14285714285714 43.5 57.14285714285714 43.5C62.14285714285714 43.5 66.42857142857142 58 71.42857142857142 58C76.42857142857142 58 80.71428571428571 58 85.71428571428571 58C90.71428571428571 58 94.99999999999999 50.75 99.99999999999999 50.75C99.99999999999999 50.75 99.99999999999999 50.75 99.99999999999999 50.75 "
                                                                        fill="none" fill-opacity="1"
                                                                        stroke="#ffffff" stroke-opacity="1"
                                                                        stroke-linecap="butt" stroke-width="2"
                                                                        stroke-dasharray="0" class="apexcharts-area"
                                                                        index="0"
                                                                        clip-path="url(#gridRectMask6wozusd4)"
                                                                        pathTo="M 0 0C 4.999999999999999 0 9.285714285714285 29 14.285714285714285 29C 19.285714285714285 29 23.57142857142857 14.5 28.57142857142857 14.5C 33.57142857142857 14.5 37.857142857142854 21.75 42.857142857142854 21.75C 47.857142857142854 21.75 52.14285714285714 43.5 57.14285714285714 43.5C 62.14285714285714 43.5 66.42857142857142 58 71.42857142857142 58C 76.42857142857142 58 80.71428571428571 58 85.71428571428571 58C 90.71428571428571 58 94.99999999999999 50.75 99.99999999999999 50.75"
                                                                        pathFrom="M 0 9816.5 L 0 9816.5 L 14.285714285714285 9816.5 L 28.57142857142857 9816.5 L 42.857142857142854 9816.5 L 57.14285714285714 9816.5 L 71.42857142857142 9816.5 L 85.71428571428571 9816.5 L 99.99999999999999 9816.5"
                                                                        fill-rule="evenodd"></path>
                                                                    <g id="SvgjsG2525"
                                                                        class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown"
                                                                        data:realIndex="0">
                                                                        <g class="apexcharts-series-markers">
                                                                            <circle id="SvgjsCircle2557" r="0"
                                                                                cx="0" cy="0"
                                                                                class="apexcharts-marker wyr5baf8c no-pointer-events"
                                                                                stroke="#ffffff" fill="#ffffff"
                                                                                fill-opacity="1" stroke-width="2"
                                                                                stroke-opacity="0.9"
                                                                                default-marker-size="0"></circle>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                                <g id="SvgjsG2526" class="apexcharts-datalabels"
                                                                    data:realIndex="0"></g>
                                                            </g>
                                                            <line id="SvgjsLine2541" x1="0" y1="0"
                                                                x2="100" y2="0" stroke="#b6b6b6"
                                                                stroke-dasharray="0" stroke-width="1"
                                                                stroke-linecap="butt"
                                                                class="apexcharts-ycrosshairs"></line>
                                                            <line id="SvgjsLine2542" x1="0" y1="0"
                                                                x2="100" y2="0" stroke-dasharray="0"
                                                                stroke-width="0" stroke-linecap="butt"
                                                                class="apexcharts-ycrosshairs-hidden"></line>
                                                            <g id="SvgjsG2543" class="apexcharts-xaxis"
                                                                transform="translate(0, 0)">
                                                                <g id="SvgjsG2544" class="apexcharts-xaxis-texts-g"
                                                                    transform="translate(0, -4)"></g>
                                                            </g>
                                                            <g id="SvgjsG2554"
                                                                class="apexcharts-yaxis-annotations apexcharts-hidden-element-shown">
                                                            </g>
                                                            <g id="SvgjsG2555"
                                                                class="apexcharts-xaxis-annotations apexcharts-hidden-element-shown">
                                                            </g>
                                                            <g id="SvgjsG2556"
                                                                class="apexcharts-point-annotations apexcharts-hidden-element-shown">
                                                            </g>
                                                        </g>
                                                    </svg>
                                                    <div class="apexcharts-tooltip apexcharts-theme-light">
                                                        <div class="apexcharts-tooltip-series-group"
                                                            style="order: 1;"><span
                                                                class="apexcharts-tooltip-marker"
                                                                style="background-color: rgb(255, 255, 255);"></span>
                                                            <div class="apexcharts-tooltip-text"
                                                                style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                                <div class="apexcharts-tooltip-y-group"><span
                                                                        class="apexcharts-tooltip-text-y-label"></span><span
                                                                        class="apexcharts-tooltip-text-y-value"></span>
                                                                </div>
                                                                <div class="apexcharts-tooltip-goals-group"><span
                                                                        class="apexcharts-tooltip-text-goals-label"></span><span
                                                                        class="apexcharts-tooltip-text-goals-value"></span>
                                                                </div>
                                                                <div class="apexcharts-tooltip-z-group"><span
                                                                        class="apexcharts-tooltip-text-z-label"></span><span
                                                                        class="apexcharts-tooltip-text-z-value"></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                                        <div class="apexcharts-yaxistooltip-text"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-link col-lg-3 col-md-3 col-sm-12 price-item price-up"
                                    data-komoditas-id="29"
                                    style="--bg-img: url('https://panelharga.badanpangan.go.id/src/assets/img/komoditas-ikon/kedelai-biji-kering-impor.png');"
                                    onclick="checkDetails(this)">
                                    <div
                                        style="display:flex;flex-direction:column;justify-content:space-between;align-items:flex-start;height:100%;">
                                        <span class="price-item-title">Kedelai Biji Kering (Impor)</span>
                                        <div
                                            style="display:flex;justify-content:space-between;align-items:flex-end;width:100%;">
                                            <div style="margin-right:12px;font-size:13px;">
                                                <span class="price-item-price"
                                                    style="background-color:transparent;">
                                                    Rp 12.010
                                                </span>
                                                <span class="price-item-per">Rp./Kg</span>
                                                <span class="price-item-increment"
                                                    style="background-color:#008000;padding:0px 5px;border-radius:5px;">
                                                    <i class="fa-solid fa-arrow-down" style="margin-right: 4px"></i>
                                                    -0.58% - Rp -70
                                                </span>
                                            </div>
                                            <div class="chart" id="chart-29" style="min-height: 60px;">
                                                <div id="apexchartsconk82ku"
                                                    class="apexcharts-canvas apexchartsconk82ku apexcharts-theme-light"
                                                    style="width: 100px; height: 60px;"><svg id="SvgjsSvg2558"
                                                        width="100" height="60"
                                                        xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                                        xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg"
                                                        xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                                        style="background: transparent;">
                                                        <foreignObject x="0" y="0" width="100" height="60">
                                                            <div class="apexcharts-legend"
                                                                xmlns="http://www.w3.org/1999/xhtml"
                                                                style="max-height: 30px;"></div>
                                                        </foreignObject>
                                                        <rect id="SvgjsRect2562" width="0" height="0"
                                                            x="0" y="0" rx="0" ry="0"
                                                            opacity="1" stroke-width="0" stroke="none"
                                                            stroke-dasharray="0" fill="#fefefe"></rect>
                                                        <g id="SvgjsG2596" class="apexcharts-yaxis" rel="0"
                                                            transform="translate(-18, 0)"></g>
                                                        <g id="SvgjsG2560"
                                                            class="apexcharts-inner apexcharts-graphical"
                                                            transform="translate(0, 1)">
                                                            <defs id="SvgjsDefs2559">
                                                                <clipPath id="gridRectMaskconk82ku">
                                                                    <rect id="SvgjsRect2564" width="106"
                                                                        height="64" x="-3" y="-3" rx="0"
                                                                        ry="0" opacity="1"
                                                                        stroke-width="0" stroke="none"
                                                                        stroke-dasharray="0" fill="#fff"></rect>
                                                                </clipPath>
                                                                <clipPath id="forecastMaskconk82ku"></clipPath>
                                                                <clipPath id="nonForecastMaskconk82ku"></clipPath>
                                                                <clipPath id="gridRectMarkerMaskconk82ku">
                                                                    <rect id="SvgjsRect2565" width="104"
                                                                        height="62" x="-2" y="-2" rx="0"
                                                                        ry="0" opacity="1"
                                                                        stroke-width="0" stroke="none"
                                                                        stroke-dasharray="0" fill="#fff"></rect>
                                                                </clipPath>
                                                                <linearGradient id="SvgjsLinearGradient2570"
                                                                    x1="0" y1="0" x2="0"
                                                                    y2="1">
                                                                    <stop id="SvgjsStop2571" stop-opacity="0.65"
                                                                        stop-color="rgba(255,255,255,0.65)"
                                                                        offset="0"></stop>
                                                                    <stop id="SvgjsStop2572" stop-opacity="0.5"
                                                                        stop-color="rgba(128,135,255,0.5)"
                                                                        offset="1"></stop>
                                                                    <stop id="SvgjsStop2573" stop-opacity="0.5"
                                                                        stop-color="rgba(128,135,255,0.5)"
                                                                        offset="1"></stop>
                                                                </linearGradient>
                                                            </defs>
                                                            <line id="SvgjsLine2563" x1="0" y1="0"
                                                                x2="0" y2="58" stroke="#b6b6b6"
                                                                stroke-dasharray="3" stroke-linecap="butt"
                                                                class="apexcharts-xcrosshairs" x="0" y="0"
                                                                width="1" height="58" fill="#b1b9c4"
                                                                filter="none" fill-opacity="0.9"
                                                                stroke-width="1"></line>
                                                            <g id="SvgjsG2576" class="apexcharts-grid">
                                                                <g id="SvgjsG2577"
                                                                    class="apexcharts-gridlines-horizontal"
                                                                    style="display: none;">
                                                                    <line id="SvgjsLine2580" x1="0"
                                                                        y1="0" x2="100"
                                                                        y2="0" stroke="#e0e0e0"
                                                                        stroke-dasharray="0" stroke-linecap="butt"
                                                                        class="apexcharts-gridline"></line>
                                                                    <line id="SvgjsLine2581" x1="0"
                                                                        y1="58" x2="100"
                                                                        y2="58" stroke="#e0e0e0"
                                                                        stroke-dasharray="0" stroke-linecap="butt"
                                                                        class="apexcharts-gridline"></line>
                                                                </g>
                                                                <g id="SvgjsG2578"
                                                                    class="apexcharts-gridlines-vertical"
                                                                    style="display: none;"></g>
                                                                <line id="SvgjsLine2583" x1="0"
                                                                    y1="58" x2="100" y2="58"
                                                                    stroke="transparent" stroke-dasharray="0"
                                                                    stroke-linecap="butt"></line>
                                                                <line id="SvgjsLine2582" x1="0"
                                                                    y1="1" x2="0" y2="58"
                                                                    stroke="transparent" stroke-dasharray="0"
                                                                    stroke-linecap="butt"></line>
                                                            </g>
                                                            <g id="SvgjsG2579" class="apexcharts-grid-borders"
                                                                style="display: none;"></g>
                                                            <g id="SvgjsG2566"
                                                                class="apexcharts-area-series apexcharts-plot-series">
                                                                <g id="SvgjsG2567" class="apexcharts-series"
                                                                    zIndex="0" seriesName="series-1"
                                                                    data:longestSeries="true" rel="1"
                                                                    data:realIndex="0">
                                                                    <path id="SvgjsPath2574"
                                                                        d="M0 0C4.999999999999999 0 9.285714285714285 29 14.285714285714285 29C19.285714285714285 29 23.57142857142857 29 28.57142857142857 29C33.57142857142857 29 37.857142857142854 14.5 42.857142857142854 14.5C47.857142857142854 14.5 52.14285714285714 14.5 57.14285714285714 14.5C62.14285714285714 14.5 66.42857142857142 43.5 71.42857142857142 43.5C76.42857142857142 43.5 80.71428571428571 19.33333333333394 85.71428571428571 19.33333333333394C90.71428571428571 19.33333333333394 94.99999999999999 53.16666666666697 99.99999999999999 53.16666666666697C99.99999999999999 53.16666666666697 99.99999999999999 53.16666666666697 99.99999999999999 58L0 58C0 58 0 0 0 0 "
                                                                        fill="url(#SvgjsLinearGradient2570)"
                                                                        fill-opacity="1" stroke-opacity="1"
                                                                        stroke-linecap="butt" stroke-width="0"
                                                                        stroke-dasharray="0" class="apexcharts-area"
                                                                        index="0"
                                                                        clip-path="url(#gridRectMaskconk82ku)"
                                                                        pathTo="M 0 0C 4.999999999999999 0 9.285714285714285 29 14.285714285714285 29C 19.285714285714285 29 23.57142857142857 29 28.57142857142857 29C 33.57142857142857 29 37.857142857142854 14.5 42.857142857142854 14.5C 47.857142857142854 14.5 52.14285714285714 14.5 57.14285714285714 14.5C 62.14285714285714 14.5 66.42857142857142 43.5 71.42857142857142 43.5C 76.42857142857142 43.5 80.71428571428571 19.33333333333394 85.71428571428571 19.33333333333394C 90.71428571428571 19.33333333333394 94.99999999999999 53.16666666666697 99.99999999999999 53.16666666666697C 99.99999999999999 53.16666666666697 99.99999999999999 53.16666666666697 99.99999999999999 58 L 0 58z"
                                                                        pathFrom="M 0 5858 L 0 5858 L 14.285714285714285 5858 L 28.57142857142857 5858 L 42.857142857142854 5858 L 57.14285714285714 5858 L 71.42857142857142 5858 L 85.71428571428571 5858 L 99.99999999999999 5858 L 0 5858">
                                                                    </path>
                                                                    <path id="SvgjsPath2575"
                                                                        d="M0 0C4.999999999999999 0 9.285714285714285 29 14.285714285714285 29C19.285714285714285 29 23.57142857142857 29 28.57142857142857 29C33.57142857142857 29 37.857142857142854 14.5 42.857142857142854 14.5C47.857142857142854 14.5 52.14285714285714 14.5 57.14285714285714 14.5C62.14285714285714 14.5 66.42857142857142 43.5 71.42857142857142 43.5C76.42857142857142 43.5 80.71428571428571 19.33333333333394 85.71428571428571 19.33333333333394C90.71428571428571 19.33333333333394 94.99999999999999 53.16666666666697 99.99999999999999 53.16666666666697C99.99999999999999 53.16666666666697 99.99999999999999 53.16666666666697 99.99999999999999 53.16666666666697 "
                                                                        fill="none" fill-opacity="1"
                                                                        stroke="#ffffff" stroke-opacity="1"
                                                                        stroke-linecap="butt" stroke-width="2"
                                                                        stroke-dasharray="0" class="apexcharts-area"
                                                                        index="0"
                                                                        clip-path="url(#gridRectMaskconk82ku)"
                                                                        pathTo="M 0 0C 4.999999999999999 0 9.285714285714285 29 14.285714285714285 29C 19.285714285714285 29 23.57142857142857 29 28.57142857142857 29C 33.57142857142857 29 37.857142857142854 14.5 42.857142857142854 14.5C 47.857142857142854 14.5 52.14285714285714 14.5 57.14285714285714 14.5C 62.14285714285714 14.5 66.42857142857142 43.5 71.42857142857142 43.5C 76.42857142857142 43.5 80.71428571428571 19.33333333333394 85.71428571428571 19.33333333333394C 90.71428571428571 19.33333333333394 94.99999999999999 53.16666666666697 99.99999999999999 53.16666666666697"
                                                                        pathFrom="M 0 5858 L 0 5858 L 14.285714285714285 5858 L 28.57142857142857 5858 L 42.857142857142854 5858 L 57.14285714285714 5858 L 71.42857142857142 5858 L 85.71428571428571 5858 L 99.99999999999999 5858"
                                                                        fill-rule="evenodd"></path>
                                                                    <g id="SvgjsG2568"
                                                                        class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown"
                                                                        data:realIndex="0">
                                                                        <g class="apexcharts-series-markers">
                                                                            <circle id="SvgjsCircle2600" r="0"
                                                                                cx="0" cy="0"
                                                                                class="apexcharts-marker wv3bc2yre no-pointer-events"
                                                                                stroke="#ffffff" fill="#ffffff"
                                                                                fill-opacity="1" stroke-width="2"
                                                                                stroke-opacity="0.9"
                                                                                default-marker-size="0"></circle>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                                <g id="SvgjsG2569" class="apexcharts-datalabels"
                                                                    data:realIndex="0"></g>
                                                            </g>
                                                            <line id="SvgjsLine2584" x1="0" y1="0"
                                                                x2="100" y2="0" stroke="#b6b6b6"
                                                                stroke-dasharray="0" stroke-width="1"
                                                                stroke-linecap="butt"
                                                                class="apexcharts-ycrosshairs"></line>
                                                            <line id="SvgjsLine2585" x1="0" y1="0"
                                                                x2="100" y2="0" stroke-dasharray="0"
                                                                stroke-width="0" stroke-linecap="butt"
                                                                class="apexcharts-ycrosshairs-hidden"></line>
                                                            <g id="SvgjsG2586" class="apexcharts-xaxis"
                                                                transform="translate(0, 0)">
                                                                <g id="SvgjsG2587" class="apexcharts-xaxis-texts-g"
                                                                    transform="translate(0, -4)"></g>
                                                            </g>
                                                            <g id="SvgjsG2597"
                                                                class="apexcharts-yaxis-annotations apexcharts-hidden-element-shown">
                                                            </g>
                                                            <g id="SvgjsG2598"
                                                                class="apexcharts-xaxis-annotations apexcharts-hidden-element-shown">
                                                            </g>
                                                            <g id="SvgjsG2599"
                                                                class="apexcharts-point-annotations apexcharts-hidden-element-shown">
                                                            </g>
                                                        </g>
                                                    </svg>
                                                    <div class="apexcharts-tooltip apexcharts-theme-light">
                                                        <div class="apexcharts-tooltip-series-group"
                                                            style="order: 1;"><span
                                                                class="apexcharts-tooltip-marker"
                                                                style="background-color: rgb(255, 255, 255);"></span>
                                                            <div class="apexcharts-tooltip-text"
                                                                style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                                <div class="apexcharts-tooltip-y-group"><span
                                                                        class="apexcharts-tooltip-text-y-label"></span><span
                                                                        class="apexcharts-tooltip-text-y-value"></span>
                                                                </div>
                                                                <div class="apexcharts-tooltip-goals-group"><span
                                                                        class="apexcharts-tooltip-text-goals-label"></span><span
                                                                        class="apexcharts-tooltip-text-goals-value"></span>
                                                                </div>
                                                                <div class="apexcharts-tooltip-z-group"><span
                                                                        class="apexcharts-tooltip-text-z-label"></span><span
                                                                        class="apexcharts-tooltip-text-z-value"></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                                        <div class="apexcharts-yaxistooltip-text"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-link col-lg-3 col-md-3 col-sm-12 price-item price-down"
                                    data-komoditas-id="30"
                                    style="--bg-img: url('https://panelharga.badanpangan.go.id/src/assets/img/komoditas-ikon/bawang-merah.png');"
                                    onclick="checkDetails(this)">
                                    <div
                                        style="display:flex;flex-direction:column;justify-content:space-between;align-items:flex-start;height:100%;">
                                        <span class="price-item-title">Bawang Merah</span>
                                        <div
                                            style="display:flex;justify-content:space-between;align-items:flex-end;width:100%;">
                                            <div style="margin-right:12px;font-size:13px;">
                                                <span class="price-item-price"
                                                    style="background-color:transparent;">
                                                    Rp 47.710
                                                </span>
                                                <span class="price-item-per">Rp./Kg</span>
                                                <span class="price-item-increment"
                                                    style="background-color:#ff0000;padding:0px 5px;border-radius:5px;">
                                                    <i class="fa-solid fa-arrow-up" style="margin-right: 4px"></i>
                                                    0.08% - Rp 40
                                                </span>
                                            </div>
                                            <div class="chart" id="chart-30" style="min-height: 60px;">
                                                <div id="apexcharts2zv68hsj"
                                                    class="apexcharts-canvas apexcharts2zv68hsj apexcharts-theme-light"
                                                    style="width: 100px; height: 60px;"><svg id="SvgjsSvg2601"
                                                        width="100" height="60"
                                                        xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                                        xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg"
                                                        xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                                        style="background: transparent;">
                                                        <foreignObject x="0" y="0" width="100" height="60">
                                                            <div class="apexcharts-legend"
                                                                xmlns="http://www.w3.org/1999/xhtml"
                                                                style="max-height: 30px;"></div>
                                                        </foreignObject>
                                                        <rect id="SvgjsRect2605" width="0" height="0"
                                                            x="0" y="0" rx="0" ry="0"
                                                            opacity="1" stroke-width="0" stroke="none"
                                                            stroke-dasharray="0" fill="#fefefe"></rect>
                                                        <g id="SvgjsG2639" class="apexcharts-yaxis" rel="0"
                                                            transform="translate(-18, 0)"></g>
                                                        <g id="SvgjsG2603"
                                                            class="apexcharts-inner apexcharts-graphical"
                                                            transform="translate(0, 1)">
                                                            <defs id="SvgjsDefs2602">
                                                                <clipPath id="gridRectMask2zv68hsj">
                                                                    <rect id="SvgjsRect2607" width="106"
                                                                        height="64" x="-3" y="-3" rx="0"
                                                                        ry="0" opacity="1"
                                                                        stroke-width="0" stroke="none"
                                                                        stroke-dasharray="0" fill="#fff"></rect>
                                                                </clipPath>
                                                                <clipPath id="forecastMask2zv68hsj"></clipPath>
                                                                <clipPath id="nonForecastMask2zv68hsj"></clipPath>
                                                                <clipPath id="gridRectMarkerMask2zv68hsj">
                                                                    <rect id="SvgjsRect2608" width="104"
                                                                        height="62" x="-2" y="-2" rx="0"
                                                                        ry="0" opacity="1"
                                                                        stroke-width="0" stroke="none"
                                                                        stroke-dasharray="0" fill="#fff"></rect>
                                                                </clipPath>
                                                                <linearGradient id="SvgjsLinearGradient2613"
                                                                    x1="0" y1="0" x2="0"
                                                                    y2="1">
                                                                    <stop id="SvgjsStop2614" stop-opacity="0.65"
                                                                        stop-color="rgba(255,255,255,0.65)"
                                                                        offset="0"></stop>
                                                                    <stop id="SvgjsStop2615" stop-opacity="0.5"
                                                                        stop-color="rgba(128,135,255,0.5)"
                                                                        offset="1"></stop>
                                                                    <stop id="SvgjsStop2616" stop-opacity="0.5"
                                                                        stop-color="rgba(128,135,255,0.5)"
                                                                        offset="1"></stop>
                                                                </linearGradient>
                                                            </defs>
                                                            <line id="SvgjsLine2606" x1="0" y1="0"
                                                                x2="0" y2="58" stroke="#b6b6b6"
                                                                stroke-dasharray="3" stroke-linecap="butt"
                                                                class="apexcharts-xcrosshairs" x="0" y="0"
                                                                width="1" height="58" fill="#b1b9c4"
                                                                filter="none" fill-opacity="0.9"
                                                                stroke-width="1"></line>
                                                            <g id="SvgjsG2619" class="apexcharts-grid">
                                                                <g id="SvgjsG2620"
                                                                    class="apexcharts-gridlines-horizontal"
                                                                    style="display: none;">
                                                                    <line id="SvgjsLine2623" x1="0"
                                                                        y1="0" x2="100"
                                                                        y2="0" stroke="#e0e0e0"
                                                                        stroke-dasharray="0" stroke-linecap="butt"
                                                                        class="apexcharts-gridline"></line>
                                                                    <line id="SvgjsLine2624" x1="0"
                                                                        y1="58" x2="100"
                                                                        y2="58" stroke="#e0e0e0"
                                                                        stroke-dasharray="0" stroke-linecap="butt"
                                                                        class="apexcharts-gridline"></line>
                                                                </g>
                                                                <g id="SvgjsG2621"
                                                                    class="apexcharts-gridlines-vertical"
                                                                    style="display: none;"></g>
                                                                <line id="SvgjsLine2626" x1="0"
                                                                    y1="58" x2="100" y2="58"
                                                                    stroke="transparent" stroke-dasharray="0"
                                                                    stroke-linecap="butt"></line>
                                                                <line id="SvgjsLine2625" x1="0"
                                                                    y1="1" x2="0" y2="58"
                                                                    stroke="transparent" stroke-dasharray="0"
                                                                    stroke-linecap="butt"></line>
                                                            </g>
                                                            <g id="SvgjsG2622" class="apexcharts-grid-borders"
                                                                style="display: none;"></g>
                                                            <g id="SvgjsG2609"
                                                                class="apexcharts-area-series apexcharts-plot-series">
                                                                <g id="SvgjsG2610" class="apexcharts-series"
                                                                    zIndex="0" seriesName="series-1"
                                                                    data:longestSeries="true" rel="1"
                                                                    data:realIndex="0">
                                                                    <path id="SvgjsPath2617"
                                                                        d="M0 3.866666666666788C4.999999999999999 3.866666666666788 9.285714285714285 2.9000000000005457 14.285714285714285 2.9000000000005457C19.285714285714285 2.9000000000005457 23.57142857142857 33.83333333333394 28.57142857142857 33.83333333333394C33.57142857142857 33.83333333333394 37.857142857142854 50.266666666667334 42.857142857142854 50.266666666667334C47.857142857142854 50.266666666667334 52.14285714285714 56.066666666667516 57.14285714285714 56.066666666667516C62.14285714285714 56.066666666667516 66.42857142857142 29 71.42857142857142 29C76.42857142857142 29 80.71428571428571 41.566666666667516 85.71428571428571 41.566666666667516C90.71428571428571 41.566666666667516 94.99999999999999 37.70000000000073 99.99999999999999 37.70000000000073C99.99999999999999 37.70000000000073 99.99999999999999 37.70000000000073 99.99999999999999 58L0 58C0 58 0 3.866666666666788 0 3.866666666666788 "
                                                                        fill="url(#SvgjsLinearGradient2613)"
                                                                        fill-opacity="1" stroke-opacity="1"
                                                                        stroke-linecap="butt" stroke-width="0"
                                                                        stroke-dasharray="0" class="apexcharts-area"
                                                                        index="0"
                                                                        clip-path="url(#gridRectMask2zv68hsj)"
                                                                        pathTo="M 0 3.866666666666788C 4.999999999999999 3.866666666666788 9.285714285714285 2.9000000000005457 14.285714285714285 2.9000000000005457C 19.285714285714285 2.9000000000005457 23.57142857142857 33.83333333333394 28.57142857142857 33.83333333333394C 33.57142857142857 33.83333333333394 37.857142857142854 50.266666666667334 42.857142857142854 50.266666666667334C 47.857142857142854 50.266666666667334 52.14285714285714 56.066666666667516 57.14285714285714 56.066666666667516C 62.14285714285714 56.066666666667516 66.42857142857142 29 71.42857142857142 29C 76.42857142857142 29 80.71428571428571 41.566666666667516 85.71428571428571 41.566666666667516C 90.71428571428571 41.566666666667516 94.99999999999999 37.70000000000073 99.99999999999999 37.70000000000073C 99.99999999999999 37.70000000000073 99.99999999999999 37.70000000000073 99.99999999999999 58 L 0 58z"
                                                                        pathFrom="M 0 4649.666666666667 L 0 4649.666666666667 L 14.285714285714285 4649.666666666667 L 28.57142857142857 4649.666666666667 L 42.857142857142854 4649.666666666667 L 57.14285714285714 4649.666666666667 L 71.42857142857142 4649.666666666667 L 85.71428571428571 4649.666666666667 L 99.99999999999999 4649.666666666667 L 0 4649.666666666667">
                                                                    </path>
                                                                    <path id="SvgjsPath2618"
                                                                        d="M0 3.866666666666788C4.999999999999999 3.866666666666788 9.285714285714285 2.9000000000005457 14.285714285714285 2.9000000000005457C19.285714285714285 2.9000000000005457 23.57142857142857 33.83333333333394 28.57142857142857 33.83333333333394C33.57142857142857 33.83333333333394 37.857142857142854 50.266666666667334 42.857142857142854 50.266666666667334C47.857142857142854 50.266666666667334 52.14285714285714 56.066666666667516 57.14285714285714 56.066666666667516C62.14285714285714 56.066666666667516 66.42857142857142 29 71.42857142857142 29C76.42857142857142 29 80.71428571428571 41.566666666667516 85.71428571428571 41.566666666667516C90.71428571428571 41.566666666667516 94.99999999999999 37.70000000000073 99.99999999999999 37.70000000000073C99.99999999999999 37.70000000000073 99.99999999999999 37.70000000000073 99.99999999999999 37.70000000000073 "
                                                                        fill="none" fill-opacity="1"
                                                                        stroke="#ffffff" stroke-opacity="1"
                                                                        stroke-linecap="butt" stroke-width="2"
                                                                        stroke-dasharray="0" class="apexcharts-area"
                                                                        index="0"
                                                                        clip-path="url(#gridRectMask2zv68hsj)"
                                                                        pathTo="M 0 3.866666666666788C 4.999999999999999 3.866666666666788 9.285714285714285 2.9000000000005457 14.285714285714285 2.9000000000005457C 19.285714285714285 2.9000000000005457 23.57142857142857 33.83333333333394 28.57142857142857 33.83333333333394C 33.57142857142857 33.83333333333394 37.857142857142854 50.266666666667334 42.857142857142854 50.266666666667334C 47.857142857142854 50.266666666667334 52.14285714285714 56.066666666667516 57.14285714285714 56.066666666667516C 62.14285714285714 56.066666666667516 66.42857142857142 29 71.42857142857142 29C 76.42857142857142 29 80.71428571428571 41.566666666667516 85.71428571428571 41.566666666667516C 90.71428571428571 41.566666666667516 94.99999999999999 37.70000000000073 99.99999999999999 37.70000000000073"
                                                                        pathFrom="M 0 4649.666666666667 L 0 4649.666666666667 L 14.285714285714285 4649.666666666667 L 28.57142857142857 4649.666666666667 L 42.857142857142854 4649.666666666667 L 57.14285714285714 4649.666666666667 L 71.42857142857142 4649.666666666667 L 85.71428571428571 4649.666666666667 L 99.99999999999999 4649.666666666667"
                                                                        fill-rule="evenodd"></path>
                                                                    <g id="SvgjsG2611"
                                                                        class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown"
                                                                        data:realIndex="0">
                                                                        <g class="apexcharts-series-markers">
                                                                            <circle id="SvgjsCircle2643" r="0"
                                                                                cx="0" cy="0"
                                                                                class="apexcharts-marker w7je7nill no-pointer-events"
                                                                                stroke="#ffffff" fill="#ffffff"
                                                                                fill-opacity="1" stroke-width="2"
                                                                                stroke-opacity="0.9"
                                                                                default-marker-size="0"></circle>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                                <g id="SvgjsG2612" class="apexcharts-datalabels"
                                                                    data:realIndex="0"></g>
                                                            </g>
                                                            <line id="SvgjsLine2627" x1="0" y1="0"
                                                                x2="100" y2="0" stroke="#b6b6b6"
                                                                stroke-dasharray="0" stroke-width="1"
                                                                stroke-linecap="butt"
                                                                class="apexcharts-ycrosshairs"></line>
                                                            <line id="SvgjsLine2628" x1="0" y1="0"
                                                                x2="100" y2="0" stroke-dasharray="0"
                                                                stroke-width="0" stroke-linecap="butt"
                                                                class="apexcharts-ycrosshairs-hidden"></line>
                                                            <g id="SvgjsG2629" class="apexcharts-xaxis"
                                                                transform="translate(0, 0)">
                                                                <g id="SvgjsG2630" class="apexcharts-xaxis-texts-g"
                                                                    transform="translate(0, -4)"></g>
                                                            </g>
                                                            <g id="SvgjsG2640"
                                                                class="apexcharts-yaxis-annotations apexcharts-hidden-element-shown">
                                                            </g>
                                                            <g id="SvgjsG2641"
                                                                class="apexcharts-xaxis-annotations apexcharts-hidden-element-shown">
                                                            </g>
                                                            <g id="SvgjsG2642"
                                                                class="apexcharts-point-annotations apexcharts-hidden-element-shown">
                                                            </g>
                                                        </g>
                                                    </svg>
                                                    <div class="apexcharts-tooltip apexcharts-theme-light">
                                                        <div class="apexcharts-tooltip-series-group"
                                                            style="order: 1;"><span
                                                                class="apexcharts-tooltip-marker"
                                                                style="background-color: rgb(255, 255, 255);"></span>
                                                            <div class="apexcharts-tooltip-text"
                                                                style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                                <div class="apexcharts-tooltip-y-group"><span
                                                                        class="apexcharts-tooltip-text-y-label"></span><span
                                                                        class="apexcharts-tooltip-text-y-value"></span>
                                                                </div>
                                                                <div class="apexcharts-tooltip-goals-group"><span
                                                                        class="apexcharts-tooltip-text-goals-label"></span><span
                                                                        class="apexcharts-tooltip-text-goals-value"></span>
                                                                </div>
                                                                <div class="apexcharts-tooltip-z-group"><span
                                                                        class="apexcharts-tooltip-text-z-label"></span><span
                                                                        class="apexcharts-tooltip-text-z-value"></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                                        <div class="apexcharts-yaxistooltip-text"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-link col-lg-3 col-md-3 col-sm-12 price-item price-down"
                                    data-komoditas-id="31"
                                    style="--bg-img: url('https://panelharga.badanpangan.go.id/src/assets/img/komoditas-ikon/bawang-putih-bonggol.png');"
                                    onclick="checkDetails(this)">
                                    <div
                                        style="display:flex;flex-direction:column;justify-content:space-between;align-items:flex-start;height:100%;">
                                        <span class="price-item-title">Bawang Putih Bonggol</span>
                                        <div
                                            style="display:flex;justify-content:space-between;align-items:flex-end;width:100%;">
                                            <div style="margin-right:12px;font-size:13px;">
                                                <span class="price-item-price"
                                                    style="background-color:transparent;">
                                                    Rp 42.610
                                                </span>
                                                <span class="price-item-per">Rp./Kg</span>
                                                <span class="price-item-increment"
                                                    style="background-color:#ff0000;padding:0px 5px;border-radius:5px;">
                                                    <i class="fa-solid fa-arrow-up" style="margin-right: 4px"></i>
                                                    0.26% - Rp 110
                                                </span>
                                            </div>
                                            <div class="chart" id="chart-31" style="min-height: 60px;">
                                                <div id="apexchartsdbk2vv89"
                                                    class="apexcharts-canvas apexchartsdbk2vv89 apexcharts-theme-light"
                                                    style="width: 100px; height: 60px;"><svg id="SvgjsSvg2644"
                                                        width="100" height="60"
                                                        xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                                        xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg"
                                                        xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                                        style="background: transparent;">
                                                        <foreignObject x="0" y="0" width="100" height="60">
                                                            <div class="apexcharts-legend"
                                                                xmlns="http://www.w3.org/1999/xhtml"
                                                                style="max-height: 30px;"></div>
                                                        </foreignObject>
                                                        <rect id="SvgjsRect2648" width="0" height="0"
                                                            x="0" y="0" rx="0" ry="0"
                                                            opacity="1" stroke-width="0" stroke="none"
                                                            stroke-dasharray="0" fill="#fefefe"></rect>
                                                        <g id="SvgjsG2682" class="apexcharts-yaxis" rel="0"
                                                            transform="translate(-18, 0)"></g>
                                                        <g id="SvgjsG2646"
                                                            class="apexcharts-inner apexcharts-graphical"
                                                            transform="translate(0, 1)">
                                                            <defs id="SvgjsDefs2645">
                                                                <clipPath id="gridRectMaskdbk2vv89">
                                                                    <rect id="SvgjsRect2650" width="106"
                                                                        height="64" x="-3" y="-3" rx="0"
                                                                        ry="0" opacity="1"
                                                                        stroke-width="0" stroke="none"
                                                                        stroke-dasharray="0" fill="#fff"></rect>
                                                                </clipPath>
                                                                <clipPath id="forecastMaskdbk2vv89"></clipPath>
                                                                <clipPath id="nonForecastMaskdbk2vv89"></clipPath>
                                                                <clipPath id="gridRectMarkerMaskdbk2vv89">
                                                                    <rect id="SvgjsRect2651" width="104"
                                                                        height="62" x="-2" y="-2" rx="0"
                                                                        ry="0" opacity="1"
                                                                        stroke-width="0" stroke="none"
                                                                        stroke-dasharray="0" fill="#fff"></rect>
                                                                </clipPath>
                                                                <linearGradient id="SvgjsLinearGradient2656"
                                                                    x1="0" y1="0" x2="0"
                                                                    y2="1">
                                                                    <stop id="SvgjsStop2657" stop-opacity="0.65"
                                                                        stop-color="rgba(255,255,255,0.65)"
                                                                        offset="0"></stop>
                                                                    <stop id="SvgjsStop2658" stop-opacity="0.5"
                                                                        stop-color="rgba(128,135,255,0.5)"
                                                                        offset="1"></stop>
                                                                    <stop id="SvgjsStop2659" stop-opacity="0.5"
                                                                        stop-color="rgba(128,135,255,0.5)"
                                                                        offset="1"></stop>
                                                                </linearGradient>
                                                            </defs>
                                                            <line id="SvgjsLine2649" x1="0" y1="0"
                                                                x2="0" y2="58" stroke="#b6b6b6"
                                                                stroke-dasharray="3" stroke-linecap="butt"
                                                                class="apexcharts-xcrosshairs" x="0" y="0"
                                                                width="1" height="58" fill="#b1b9c4"
                                                                filter="none" fill-opacity="0.9"
                                                                stroke-width="1"></line>
                                                            <g id="SvgjsG2662" class="apexcharts-grid">
                                                                <g id="SvgjsG2663"
                                                                    class="apexcharts-gridlines-horizontal"
                                                                    style="display: none;">
                                                                    <line id="SvgjsLine2666" x1="0"
                                                                        y1="0" x2="100"
                                                                        y2="0" stroke="#e0e0e0"
                                                                        stroke-dasharray="0" stroke-linecap="butt"
                                                                        class="apexcharts-gridline"></line>
                                                                    <line id="SvgjsLine2667" x1="0"
                                                                        y1="58" x2="100"
                                                                        y2="58" stroke="#e0e0e0"
                                                                        stroke-dasharray="0" stroke-linecap="butt"
                                                                        class="apexcharts-gridline"></line>
                                                                </g>
                                                                <g id="SvgjsG2664"
                                                                    class="apexcharts-gridlines-vertical"
                                                                    style="display: none;"></g>
                                                                <line id="SvgjsLine2669" x1="0"
                                                                    y1="58" x2="100" y2="58"
                                                                    stroke="transparent" stroke-dasharray="0"
                                                                    stroke-linecap="butt"></line>
                                                                <line id="SvgjsLine2668" x1="0"
                                                                    y1="1" x2="0" y2="58"
                                                                    stroke="transparent" stroke-dasharray="0"
                                                                    stroke-linecap="butt"></line>
                                                            </g>
                                                            <g id="SvgjsG2665" class="apexcharts-grid-borders"
                                                                style="display: none;"></g>
                                                            <g id="SvgjsG2652"
                                                                class="apexcharts-area-series apexcharts-plot-series">
                                                                <g id="SvgjsG2653" class="apexcharts-series"
                                                                    zIndex="0" seriesName="series-1"
                                                                    data:longestSeries="true" rel="1"
                                                                    data:realIndex="0">
                                                                    <path id="SvgjsPath2660"
                                                                        d="M0 24.16666666666606C4.999999999999999 24.16666666666606 9.285714285714285 20.300000000000182 14.285714285714285 20.300000000000182C19.285714285714285 20.300000000000182 23.57142857142857 3.866666666666788 28.57142857142857 3.866666666666788C33.57142857142857 3.866666666666788 37.857142857142854 11.599999999999454 42.857142857142854 11.599999999999454C47.857142857142854 11.599999999999454 52.14285714285714 19.33333333333303 57.14285714285714 19.33333333333303C62.14285714285714 19.33333333333303 66.42857142857142 13.533333333332848 71.42857142857142 13.533333333332848C76.42857142857142 13.533333333332848 80.71428571428571 58 85.71428571428571 58C90.71428571428571 58 94.99999999999999 47.36666666666679 99.99999999999999 47.36666666666679C99.99999999999999 47.36666666666679 99.99999999999999 47.36666666666679 99.99999999999999 58L0 58C0 58 0 24.16666666666606 0 24.16666666666606 "
                                                                        fill="url(#SvgjsLinearGradient2656)"
                                                                        fill-opacity="1" stroke-opacity="1"
                                                                        stroke-linecap="butt" stroke-width="0"
                                                                        stroke-dasharray="0" class="apexcharts-area"
                                                                        index="0"
                                                                        clip-path="url(#gridRectMaskdbk2vv89)"
                                                                        pathTo="M 0 24.16666666666606C 4.999999999999999 24.16666666666606 9.285714285714285 20.300000000000182 14.285714285714285 20.300000000000182C 19.285714285714285 20.300000000000182 23.57142857142857 3.866666666666788 28.57142857142857 3.866666666666788C 33.57142857142857 3.866666666666788 37.857142857142854 11.599999999999454 42.857142857142854 11.599999999999454C 47.857142857142854 11.599999999999454 52.14285714285714 19.33333333333303 57.14285714285714 19.33333333333303C 62.14285714285714 19.33333333333303 66.42857142857142 13.533333333332848 71.42857142857142 13.533333333332848C 76.42857142857142 13.533333333332848 80.71428571428571 58 85.71428571428571 58C 90.71428571428571 58 94.99999999999999 47.36666666666679 99.99999999999999 47.36666666666679C 99.99999999999999 47.36666666666679 99.99999999999999 47.36666666666679 99.99999999999999 58 L 0 58z"
                                                                        pathFrom="M 0 4166.333333333333 L 0 4166.333333333333 L 14.285714285714285 4166.333333333333 L 28.57142857142857 4166.333333333333 L 42.857142857142854 4166.333333333333 L 57.14285714285714 4166.333333333333 L 71.42857142857142 4166.333333333333 L 85.71428571428571 4166.333333333333 L 99.99999999999999 4166.333333333333 L 0 4166.333333333333">
                                                                    </path>
                                                                    <path id="SvgjsPath2661"
                                                                        d="M0 24.16666666666606C4.999999999999999 24.16666666666606 9.285714285714285 20.300000000000182 14.285714285714285 20.300000000000182C19.285714285714285 20.300000000000182 23.57142857142857 3.866666666666788 28.57142857142857 3.866666666666788C33.57142857142857 3.866666666666788 37.857142857142854 11.599999999999454 42.857142857142854 11.599999999999454C47.857142857142854 11.599999999999454 52.14285714285714 19.33333333333303 57.14285714285714 19.33333333333303C62.14285714285714 19.33333333333303 66.42857142857142 13.533333333332848 71.42857142857142 13.533333333332848C76.42857142857142 13.533333333332848 80.71428571428571 58 85.71428571428571 58C90.71428571428571 58 94.99999999999999 47.36666666666679 99.99999999999999 47.36666666666679C99.99999999999999 47.36666666666679 99.99999999999999 47.36666666666679 99.99999999999999 47.36666666666679 "
                                                                        fill="none" fill-opacity="1"
                                                                        stroke="#ffffff" stroke-opacity="1"
                                                                        stroke-linecap="butt" stroke-width="2"
                                                                        stroke-dasharray="0" class="apexcharts-area"
                                                                        index="0"
                                                                        clip-path="url(#gridRectMaskdbk2vv89)"
                                                                        pathTo="M 0 24.16666666666606C 4.999999999999999 24.16666666666606 9.285714285714285 20.300000000000182 14.285714285714285 20.300000000000182C 19.285714285714285 20.300000000000182 23.57142857142857 3.866666666666788 28.57142857142857 3.866666666666788C 33.57142857142857 3.866666666666788 37.857142857142854 11.599999999999454 42.857142857142854 11.599999999999454C 47.857142857142854 11.599999999999454 52.14285714285714 19.33333333333303 57.14285714285714 19.33333333333303C 62.14285714285714 19.33333333333303 66.42857142857142 13.533333333332848 71.42857142857142 13.533333333332848C 76.42857142857142 13.533333333332848 80.71428571428571 58 85.71428571428571 58C 90.71428571428571 58 94.99999999999999 47.36666666666679 99.99999999999999 47.36666666666679"
                                                                        pathFrom="M 0 4166.333333333333 L 0 4166.333333333333 L 14.285714285714285 4166.333333333333 L 28.57142857142857 4166.333333333333 L 42.857142857142854 4166.333333333333 L 57.14285714285714 4166.333333333333 L 71.42857142857142 4166.333333333333 L 85.71428571428571 4166.333333333333 L 99.99999999999999 4166.333333333333"
                                                                        fill-rule="evenodd"></path>
                                                                    <g id="SvgjsG2654"
                                                                        class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown"
                                                                        data:realIndex="0">
                                                                        <g class="apexcharts-series-markers">
                                                                            <circle id="SvgjsCircle2686" r="0"
                                                                                cx="0" cy="0"
                                                                                class="apexcharts-marker wbg1mted8 no-pointer-events"
                                                                                stroke="#ffffff" fill="#ffffff"
                                                                                fill-opacity="1" stroke-width="2"
                                                                                stroke-opacity="0.9"
                                                                                default-marker-size="0"></circle>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                                <g id="SvgjsG2655" class="apexcharts-datalabels"
                                                                    data:realIndex="0"></g>
                                                            </g>
                                                            <line id="SvgjsLine2670" x1="0" y1="0"
                                                                x2="100" y2="0" stroke="#b6b6b6"
                                                                stroke-dasharray="0" stroke-width="1"
                                                                stroke-linecap="butt"
                                                                class="apexcharts-ycrosshairs"></line>
                                                            <line id="SvgjsLine2671" x1="0" y1="0"
                                                                x2="100" y2="0" stroke-dasharray="0"
                                                                stroke-width="0" stroke-linecap="butt"
                                                                class="apexcharts-ycrosshairs-hidden"></line>
                                                            <g id="SvgjsG2672" class="apexcharts-xaxis"
                                                                transform="translate(0, 0)">
                                                                <g id="SvgjsG2673" class="apexcharts-xaxis-texts-g"
                                                                    transform="translate(0, -4)"></g>
                                                            </g>
                                                            <g id="SvgjsG2683"
                                                                class="apexcharts-yaxis-annotations apexcharts-hidden-element-shown">
                                                            </g>
                                                            <g id="SvgjsG2684"
                                                                class="apexcharts-xaxis-annotations apexcharts-hidden-element-shown">
                                                            </g>
                                                            <g id="SvgjsG2685"
                                                                class="apexcharts-point-annotations apexcharts-hidden-element-shown">
                                                            </g>
                                                        </g>
                                                    </svg>
                                                    <div class="apexcharts-tooltip apexcharts-theme-light">
                                                        <div class="apexcharts-tooltip-series-group"
                                                            style="order: 1;"><span
                                                                class="apexcharts-tooltip-marker"
                                                                style="background-color: rgb(255, 255, 255);"></span>
                                                            <div class="apexcharts-tooltip-text"
                                                                style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                                <div class="apexcharts-tooltip-y-group"><span
                                                                        class="apexcharts-tooltip-text-y-label"></span><span
                                                                        class="apexcharts-tooltip-text-y-value"></span>
                                                                </div>
                                                                <div class="apexcharts-tooltip-goals-group"><span
                                                                        class="apexcharts-tooltip-text-goals-label"></span><span
                                                                        class="apexcharts-tooltip-text-goals-value"></span>
                                                                </div>
                                                                <div class="apexcharts-tooltip-z-group"><span
                                                                        class="apexcharts-tooltip-text-z-label"></span><span
                                                                        class="apexcharts-tooltip-text-z-value"></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                                        <div class="apexcharts-yaxistooltip-text"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-link col-lg-3 col-md-3 col-sm-12 price-item price-down"
                                    data-komoditas-id="32"
                                    style="--bg-img: url('https://panelharga.badanpangan.go.id/src/assets/img/komoditas-ikon/cabai-merah-keriting.png');"
                                    onclick="checkDetails(this)">
                                    <div
                                        style="display:flex;flex-direction:column;justify-content:space-between;align-items:flex-start;height:100%;">
                                        <span class="price-item-title">Cabai Merah Keriting</span>
                                        <div
                                            style="display:flex;justify-content:space-between;align-items:flex-end;width:100%;">
                                            <div style="margin-right:12px;font-size:13px;">
                                                <span class="price-item-price"
                                                    style="background-color:transparent;">
                                                    Rp 45.740
                                                </span>
                                                <span class="price-item-per">Rp./Kg</span>
                                                <span class="price-item-increment"
                                                    style="background-color:#ff0000;padding:0px 5px;border-radius:5px;">
                                                    <i class="fa-solid fa-arrow-up" style="margin-right: 4px"></i>
                                                    1.02% - Rp 460
                                                </span>
                                            </div>
                                            <div class="chart" id="chart-32" style="min-height: 60px;">
                                                <div id="apexchartsbe1z91ke"
                                                    class="apexcharts-canvas apexchartsbe1z91ke apexcharts-theme-light"
                                                    style="width: 100px; height: 60px;"><svg id="SvgjsSvg2687"
                                                        width="100" height="60"
                                                        xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                                        xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg"
                                                        xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                                        style="background: transparent;">
                                                        <foreignObject x="0" y="0" width="100" height="60">
                                                            <div class="apexcharts-legend"
                                                                xmlns="http://www.w3.org/1999/xhtml"
                                                                style="max-height: 30px;"></div>
                                                        </foreignObject>
                                                        <rect id="SvgjsRect2691" width="0" height="0"
                                                            x="0" y="0" rx="0" ry="0"
                                                            opacity="1" stroke-width="0" stroke="none"
                                                            stroke-dasharray="0" fill="#fefefe"></rect>
                                                        <g id="SvgjsG2725" class="apexcharts-yaxis" rel="0"
                                                            transform="translate(-18, 0)"></g>
                                                        <g id="SvgjsG2689"
                                                            class="apexcharts-inner apexcharts-graphical"
                                                            transform="translate(0, 1)">
                                                            <defs id="SvgjsDefs2688">
                                                                <clipPath id="gridRectMaskbe1z91ke">
                                                                    <rect id="SvgjsRect2693" width="106"
                                                                        height="64" x="-3" y="-3" rx="0"
                                                                        ry="0" opacity="1"
                                                                        stroke-width="0" stroke="none"
                                                                        stroke-dasharray="0" fill="#fff"></rect>
                                                                </clipPath>
                                                                <clipPath id="forecastMaskbe1z91ke"></clipPath>
                                                                <clipPath id="nonForecastMaskbe1z91ke"></clipPath>
                                                                <clipPath id="gridRectMarkerMaskbe1z91ke">
                                                                    <rect id="SvgjsRect2694" width="104"
                                                                        height="62" x="-2" y="-2" rx="0"
                                                                        ry="0" opacity="1"
                                                                        stroke-width="0" stroke="none"
                                                                        stroke-dasharray="0" fill="#fff"></rect>
                                                                </clipPath>
                                                                <linearGradient id="SvgjsLinearGradient2699"
                                                                    x1="0" y1="0" x2="0"
                                                                    y2="1">
                                                                    <stop id="SvgjsStop2700" stop-opacity="0.65"
                                                                        stop-color="rgba(255,255,255,0.65)"
                                                                        offset="0"></stop>
                                                                    <stop id="SvgjsStop2701" stop-opacity="0.5"
                                                                        stop-color="rgba(128,135,255,0.5)"
                                                                        offset="1"></stop>
                                                                    <stop id="SvgjsStop2702" stop-opacity="0.5"
                                                                        stop-color="rgba(128,135,255,0.5)"
                                                                        offset="1"></stop>
                                                                </linearGradient>
                                                            </defs>
                                                            <line id="SvgjsLine2692" x1="0" y1="0"
                                                                x2="0" y2="58" stroke="#b6b6b6"
                                                                stroke-dasharray="3" stroke-linecap="butt"
                                                                class="apexcharts-xcrosshairs" x="0" y="0"
                                                                width="1" height="58" fill="#b1b9c4"
                                                                filter="none" fill-opacity="0.9"
                                                                stroke-width="1"></line>
                                                            <g id="SvgjsG2705" class="apexcharts-grid">
                                                                <g id="SvgjsG2706"
                                                                    class="apexcharts-gridlines-horizontal"
                                                                    style="display: none;">
                                                                    <line id="SvgjsLine2709" x1="0"
                                                                        y1="0" x2="100"
                                                                        y2="0" stroke="#e0e0e0"
                                                                        stroke-dasharray="0" stroke-linecap="butt"
                                                                        class="apexcharts-gridline"></line>
                                                                    <line id="SvgjsLine2710" x1="0"
                                                                        y1="58" x2="100"
                                                                        y2="58" stroke="#e0e0e0"
                                                                        stroke-dasharray="0" stroke-linecap="butt"
                                                                        class="apexcharts-gridline"></line>
                                                                </g>
                                                                <g id="SvgjsG2707"
                                                                    class="apexcharts-gridlines-vertical"
                                                                    style="display: none;"></g>
                                                                <line id="SvgjsLine2712" x1="0"
                                                                    y1="58" x2="100" y2="58"
                                                                    stroke="transparent" stroke-dasharray="0"
                                                                    stroke-linecap="butt"></line>
                                                                <line id="SvgjsLine2711" x1="0"
                                                                    y1="1" x2="0" y2="58"
                                                                    stroke="transparent" stroke-dasharray="0"
                                                                    stroke-linecap="butt"></line>
                                                            </g>
                                                            <g id="SvgjsG2708" class="apexcharts-grid-borders"
                                                                style="display: none;"></g>
                                                            <g id="SvgjsG2695"
                                                                class="apexcharts-area-series apexcharts-plot-series">
                                                                <g id="SvgjsG2696" class="apexcharts-series"
                                                                    zIndex="0" seriesName="series-1"
                                                                    data:longestSeries="true" rel="1"
                                                                    data:realIndex="0">
                                                                    <path id="SvgjsPath2703"
                                                                        d="M0 31.636363636363512C4.999999999999999 31.636363636363512 9.285714285714285 55.89090909090919 14.285714285714285 55.89090909090919C19.285714285714285 55.89090909090919 23.57142857142857 25.836363636363785 28.57142857142857 25.836363636363785C33.57142857142857 25.836363636363785 37.857142857142854 33.21818181818162 42.857142857142854 33.21818181818162C47.857142857142854 33.21818181818162 52.14285714285714 10.545454545454504 57.14285714285714 10.545454545454504C62.14285714285714 10.545454545454504 66.42857142857142 9.4909090909091 71.42857142857142 9.4909090909091C76.42857142857142 9.4909090909091 80.71428571428571 27.418181818181893 85.71428571428571 27.418181818181893C90.71428571428571 27.418181818181893 94.99999999999999 3.163636363636215 99.99999999999999 3.163636363636215C99.99999999999999 3.163636363636215 99.99999999999999 3.163636363636215 99.99999999999999 58L0 58C0 58 0 31.636363636363512 0 31.636363636363512 "
                                                                        fill="url(#SvgjsLinearGradient2699)"
                                                                        fill-opacity="1" stroke-opacity="1"
                                                                        stroke-linecap="butt" stroke-width="0"
                                                                        stroke-dasharray="0" class="apexcharts-area"
                                                                        index="0"
                                                                        clip-path="url(#gridRectMaskbe1z91ke)"
                                                                        pathTo="M 0 31.636363636363512C 4.999999999999999 31.636363636363512 9.285714285714285 55.89090909090919 14.285714285714285 55.89090909090919C 19.285714285714285 55.89090909090919 23.57142857142857 25.836363636363785 28.57142857142857 25.836363636363785C 33.57142857142857 25.836363636363785 37.857142857142854 33.21818181818162 42.857142857142854 33.21818181818162C 47.857142857142854 33.21818181818162 52.14285714285714 10.545454545454504 57.14285714285714 10.545454545454504C 62.14285714285714 10.545454545454504 66.42857142857142 9.4909090909091 71.42857142857142 9.4909090909091C 76.42857142857142 9.4909090909091 80.71428571428571 27.418181818181893 85.71428571428571 27.418181818181893C 90.71428571428571 27.418181818181893 94.99999999999999 3.163636363636215 99.99999999999999 3.163636363636215C 99.99999999999999 3.163636363636215 99.99999999999999 3.163636363636215 99.99999999999999 58 L 0 58z"
                                                                        pathFrom="M 0 2414.909090909091 L 0 2414.909090909091 L 14.285714285714285 2414.909090909091 L 28.57142857142857 2414.909090909091 L 42.857142857142854 2414.909090909091 L 57.14285714285714 2414.909090909091 L 71.42857142857142 2414.909090909091 L 85.71428571428571 2414.909090909091 L 99.99999999999999 2414.909090909091 L 0 2414.909090909091">
                                                                    </path>
                                                                    <path id="SvgjsPath2704"
                                                                        d="M0 31.636363636363512C4.999999999999999 31.636363636363512 9.285714285714285 55.89090909090919 14.285714285714285 55.89090909090919C19.285714285714285 55.89090909090919 23.57142857142857 25.836363636363785 28.57142857142857 25.836363636363785C33.57142857142857 25.836363636363785 37.857142857142854 33.21818181818162 42.857142857142854 33.21818181818162C47.857142857142854 33.21818181818162 52.14285714285714 10.545454545454504 57.14285714285714 10.545454545454504C62.14285714285714 10.545454545454504 66.42857142857142 9.4909090909091 71.42857142857142 9.4909090909091C76.42857142857142 9.4909090909091 80.71428571428571 27.418181818181893 85.71428571428571 27.418181818181893C90.71428571428571 27.418181818181893 94.99999999999999 3.163636363636215 99.99999999999999 3.163636363636215C99.99999999999999 3.163636363636215 99.99999999999999 3.163636363636215 99.99999999999999 3.163636363636215 "
                                                                        fill="none" fill-opacity="1"
                                                                        stroke="#ffffff" stroke-opacity="1"
                                                                        stroke-linecap="butt" stroke-width="2"
                                                                        stroke-dasharray="0" class="apexcharts-area"
                                                                        index="0"
                                                                        clip-path="url(#gridRectMaskbe1z91ke)"
                                                                        pathTo="M 0 31.636363636363512C 4.999999999999999 31.636363636363512 9.285714285714285 55.89090909090919 14.285714285714285 55.89090909090919C 19.285714285714285 55.89090909090919 23.57142857142857 25.836363636363785 28.57142857142857 25.836363636363785C 33.57142857142857 25.836363636363785 37.857142857142854 33.21818181818162 42.857142857142854 33.21818181818162C 47.857142857142854 33.21818181818162 52.14285714285714 10.545454545454504 57.14285714285714 10.545454545454504C 62.14285714285714 10.545454545454504 66.42857142857142 9.4909090909091 71.42857142857142 9.4909090909091C 76.42857142857142 9.4909090909091 80.71428571428571 27.418181818181893 85.71428571428571 27.418181818181893C 90.71428571428571 27.418181818181893 94.99999999999999 3.163636363636215 99.99999999999999 3.163636363636215"
                                                                        pathFrom="M 0 2414.909090909091 L 0 2414.909090909091 L 14.285714285714285 2414.909090909091 L 28.57142857142857 2414.909090909091 L 42.857142857142854 2414.909090909091 L 57.14285714285714 2414.909090909091 L 71.42857142857142 2414.909090909091 L 85.71428571428571 2414.909090909091 L 99.99999999999999 2414.909090909091"
                                                                        fill-rule="evenodd"></path>
                                                                    <g id="SvgjsG2697"
                                                                        class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown"
                                                                        data:realIndex="0">
                                                                        <g class="apexcharts-series-markers">
                                                                            <circle id="SvgjsCircle2729" r="0"
                                                                                cx="0" cy="0"
                                                                                class="apexcharts-marker w7terdiit no-pointer-events"
                                                                                stroke="#ffffff" fill="#ffffff"
                                                                                fill-opacity="1" stroke-width="2"
                                                                                stroke-opacity="0.9"
                                                                                default-marker-size="0"></circle>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                                <g id="SvgjsG2698" class="apexcharts-datalabels"
                                                                    data:realIndex="0"></g>
                                                            </g>
                                                            <line id="SvgjsLine2713" x1="0" y1="0"
                                                                x2="100" y2="0" stroke="#b6b6b6"
                                                                stroke-dasharray="0" stroke-width="1"
                                                                stroke-linecap="butt"
                                                                class="apexcharts-ycrosshairs"></line>
                                                            <line id="SvgjsLine2714" x1="0" y1="0"
                                                                x2="100" y2="0" stroke-dasharray="0"
                                                                stroke-width="0" stroke-linecap="butt"
                                                                class="apexcharts-ycrosshairs-hidden"></line>
                                                            <g id="SvgjsG2715" class="apexcharts-xaxis"
                                                                transform="translate(0, 0)">
                                                                <g id="SvgjsG2716" class="apexcharts-xaxis-texts-g"
                                                                    transform="translate(0, -4)"></g>
                                                            </g>
                                                            <g id="SvgjsG2726"
                                                                class="apexcharts-yaxis-annotations apexcharts-hidden-element-shown">
                                                            </g>
                                                            <g id="SvgjsG2727"
                                                                class="apexcharts-xaxis-annotations apexcharts-hidden-element-shown">
                                                            </g>
                                                            <g id="SvgjsG2728"
                                                                class="apexcharts-point-annotations apexcharts-hidden-element-shown">
                                                            </g>
                                                        </g>
                                                    </svg>
                                                    <div class="apexcharts-tooltip apexcharts-theme-light">
                                                        <div class="apexcharts-tooltip-series-group"
                                                            style="order: 1;"><span
                                                                class="apexcharts-tooltip-marker"
                                                                style="background-color: rgb(255, 255, 255);"></span>
                                                            <div class="apexcharts-tooltip-text"
                                                                style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                                <div class="apexcharts-tooltip-y-group"><span
                                                                        class="apexcharts-tooltip-text-y-label"></span><span
                                                                        class="apexcharts-tooltip-text-y-value"></span>
                                                                </div>
                                                                <div class="apexcharts-tooltip-goals-group"><span
                                                                        class="apexcharts-tooltip-text-goals-label"></span><span
                                                                        class="apexcharts-tooltip-text-goals-value"></span>
                                                                </div>
                                                                <div class="apexcharts-tooltip-z-group"><span
                                                                        class="apexcharts-tooltip-text-z-label"></span><span
                                                                        class="apexcharts-tooltip-text-z-value"></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                                        <div class="apexcharts-yaxistooltip-text"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-link col-lg-3 col-md-3 col-sm-12 price-item price-up"
                                    data-komoditas-id="33"
                                    style="--bg-img: url('https://panelharga.badanpangan.go.id/src/assets/img/komoditas-ikon/cabai-rawit-merah.png');"
                                    onclick="checkDetails(this)">
                                    <div
                                        style="display:flex;flex-direction:column;justify-content:space-between;align-items:flex-start;height:100%;">
                                        <span class="price-item-title">Cabai Rawit Merah</span>
                                        <div
                                            style="display:flex;justify-content:space-between;align-items:flex-end;width:100%;">
                                            <div style="margin-right:12px;font-size:13px;">
                                                <span class="price-item-price"
                                                    style="background-color:transparent;">
                                                    Rp 43.410
                                                </span>
                                                <span class="price-item-per">Rp./Kg</span>
                                                <span class="price-item-increment"
                                                    style="background-color:#008000;padding:0px 5px;border-radius:5px;">
                                                    <i class="fa-solid fa-arrow-down" style="margin-right: 4px"></i>
                                                    -0.69% - Rp -300
                                                </span>
                                            </div>
                                            <div class="chart" id="chart-33" style="min-height: 60px;">
                                                <div id="apexcharts59bkscrr"
                                                    class="apexcharts-canvas apexcharts59bkscrr apexcharts-theme-light"
                                                    style="width: 100px; height: 60px;"><svg id="SvgjsSvg2730"
                                                        width="100" height="60"
                                                        xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                                        xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg"
                                                        xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                                        style="background: transparent;">
                                                        <foreignObject x="0" y="0" width="100" height="60">
                                                            <div class="apexcharts-legend"
                                                                xmlns="http://www.w3.org/1999/xhtml"
                                                                style="max-height: 30px;"></div>
                                                        </foreignObject>
                                                        <rect id="SvgjsRect2734" width="0" height="0"
                                                            x="0" y="0" rx="0" ry="0"
                                                            opacity="1" stroke-width="0" stroke="none"
                                                            stroke-dasharray="0" fill="#fefefe"></rect>
                                                        <g id="SvgjsG2768" class="apexcharts-yaxis" rel="0"
                                                            transform="translate(-18, 0)"></g>
                                                        <g id="SvgjsG2732"
                                                            class="apexcharts-inner apexcharts-graphical"
                                                            transform="translate(0, 1)">
                                                            <defs id="SvgjsDefs2731">
                                                                <clipPath id="gridRectMask59bkscrr">
                                                                    <rect id="SvgjsRect2736" width="106"
                                                                        height="64" x="-3" y="-3" rx="0"
                                                                        ry="0" opacity="1"
                                                                        stroke-width="0" stroke="none"
                                                                        stroke-dasharray="0" fill="#fff"></rect>
                                                                </clipPath>
                                                                <clipPath id="forecastMask59bkscrr"></clipPath>
                                                                <clipPath id="nonForecastMask59bkscrr"></clipPath>
                                                                <clipPath id="gridRectMarkerMask59bkscrr">
                                                                    <rect id="SvgjsRect2737" width="104"
                                                                        height="62" x="-2" y="-2" rx="0"
                                                                        ry="0" opacity="1"
                                                                        stroke-width="0" stroke="none"
                                                                        stroke-dasharray="0" fill="#fff"></rect>
                                                                </clipPath>
                                                                <linearGradient id="SvgjsLinearGradient2742"
                                                                    x1="0" y1="0" x2="0"
                                                                    y2="1">
                                                                    <stop id="SvgjsStop2743" stop-opacity="0.65"
                                                                        stop-color="rgba(255,255,255,0.65)"
                                                                        offset="0"></stop>
                                                                    <stop id="SvgjsStop2744" stop-opacity="0.5"
                                                                        stop-color="rgba(128,135,255,0.5)"
                                                                        offset="1"></stop>
                                                                    <stop id="SvgjsStop2745" stop-opacity="0.5"
                                                                        stop-color="rgba(128,135,255,0.5)"
                                                                        offset="1"></stop>
                                                                </linearGradient>
                                                            </defs>
                                                            <line id="SvgjsLine2735" x1="0" y1="0"
                                                                x2="0" y2="58" stroke="#b6b6b6"
                                                                stroke-dasharray="3" stroke-linecap="butt"
                                                                class="apexcharts-xcrosshairs" x="0" y="0"
                                                                width="1" height="58" fill="#b1b9c4"
                                                                filter="none" fill-opacity="0.9"
                                                                stroke-width="1"></line>
                                                            <g id="SvgjsG2748" class="apexcharts-grid">
                                                                <g id="SvgjsG2749"
                                                                    class="apexcharts-gridlines-horizontal"
                                                                    style="display: none;">
                                                                    <line id="SvgjsLine2752" x1="0"
                                                                        y1="0" x2="100"
                                                                        y2="0" stroke="#e0e0e0"
                                                                        stroke-dasharray="0" stroke-linecap="butt"
                                                                        class="apexcharts-gridline"></line>
                                                                    <line id="SvgjsLine2753" x1="0"
                                                                        y1="58" x2="100"
                                                                        y2="58" stroke="#e0e0e0"
                                                                        stroke-dasharray="0" stroke-linecap="butt"
                                                                        class="apexcharts-gridline"></line>
                                                                </g>
                                                                <g id="SvgjsG2750"
                                                                    class="apexcharts-gridlines-vertical"
                                                                    style="display: none;"></g>
                                                                <line id="SvgjsLine2755" x1="0"
                                                                    y1="58" x2="100" y2="58"
                                                                    stroke="transparent" stroke-dasharray="0"
                                                                    stroke-linecap="butt"></line>
                                                                <line id="SvgjsLine2754" x1="0"
                                                                    y1="1" x2="0" y2="58"
                                                                    stroke="transparent" stroke-dasharray="0"
                                                                    stroke-linecap="butt"></line>
                                                            </g>
                                                            <g id="SvgjsG2751" class="apexcharts-grid-borders"
                                                                style="display: none;"></g>
                                                            <g id="SvgjsG2738"
                                                                class="apexcharts-area-series apexcharts-plot-series">
                                                                <g id="SvgjsG2739" class="apexcharts-series"
                                                                    zIndex="0" seriesName="series-1"
                                                                    data:longestSeries="true" rel="1"
                                                                    data:realIndex="0">
                                                                    <path id="SvgjsPath2746"
                                                                        d="M0 54.23000000000002C4.999999999999999 54.23000000000002 9.285714285714285 54.52000000000021 14.285714285714285 54.52000000000021C19.285714285714285 54.52000000000021 23.57142857142857 44.950000000000045 28.57142857142857 44.950000000000045C33.57142857142857 44.950000000000045 37.857142857142854 27.550000000000182 42.857142857142854 27.550000000000182C47.857142857142854 27.550000000000182 52.14285714285714 16.5300000000002 57.14285714285714 16.5300000000002C62.14285714285714 16.5300000000002 66.42857142857142 2.900000000000091 71.42857142857142 2.900000000000091C76.42857142857142 2.900000000000091 80.71428571428571 8.410000000000082 85.71428571428571 8.410000000000082C90.71428571428571 8.410000000000082 94.99999999999999 17.110000000000127 99.99999999999999 17.110000000000127C99.99999999999999 17.110000000000127 99.99999999999999 17.110000000000127 99.99999999999999 58L0 58C0 58 0 54.23000000000002 0 54.23000000000002 "
                                                                        fill="url(#SvgjsLinearGradient2742)"
                                                                        fill-opacity="1" stroke-opacity="1"
                                                                        stroke-linecap="butt" stroke-width="0"
                                                                        stroke-dasharray="0" class="apexcharts-area"
                                                                        index="0"
                                                                        clip-path="url(#gridRectMask59bkscrr)"
                                                                        pathTo="M 0 54.23000000000002C 4.999999999999999 54.23000000000002 9.285714285714285 54.52000000000021 14.285714285714285 54.52000000000021C 19.285714285714285 54.52000000000021 23.57142857142857 44.950000000000045 28.57142857142857 44.950000000000045C 33.57142857142857 44.950000000000045 37.857142857142854 27.550000000000182 42.857142857142854 27.550000000000182C 47.857142857142854 27.550000000000182 52.14285714285714 16.5300000000002 57.14285714285714 16.5300000000002C 62.14285714285714 16.5300000000002 66.42857142857142 2.900000000000091 71.42857142857142 2.900000000000091C 76.42857142857142 2.900000000000091 80.71428571428571 8.410000000000082 85.71428571428571 8.410000000000082C 90.71428571428571 8.410000000000082 94.99999999999999 17.110000000000127 99.99999999999999 17.110000000000127C 99.99999999999999 17.110000000000127 99.99999999999999 17.110000000000127 99.99999999999999 58 L 0 58z"
                                                                        pathFrom="M 0 1276 L 0 1276 L 14.285714285714285 1276 L 28.57142857142857 1276 L 42.857142857142854 1276 L 57.14285714285714 1276 L 71.42857142857142 1276 L 85.71428571428571 1276 L 99.99999999999999 1276 L 0 1276">
                                                                    </path>
                                                                    <path id="SvgjsPath2747"
                                                                        d="M0 54.23000000000002C4.999999999999999 54.23000000000002 9.285714285714285 54.52000000000021 14.285714285714285 54.52000000000021C19.285714285714285 54.52000000000021 23.57142857142857 44.950000000000045 28.57142857142857 44.950000000000045C33.57142857142857 44.950000000000045 37.857142857142854 27.550000000000182 42.857142857142854 27.550000000000182C47.857142857142854 27.550000000000182 52.14285714285714 16.5300000000002 57.14285714285714 16.5300000000002C62.14285714285714 16.5300000000002 66.42857142857142 2.900000000000091 71.42857142857142 2.900000000000091C76.42857142857142 2.900000000000091 80.71428571428571 8.410000000000082 85.71428571428571 8.410000000000082C90.71428571428571 8.410000000000082 94.99999999999999 17.110000000000127 99.99999999999999 17.110000000000127C99.99999999999999 17.110000000000127 99.99999999999999 17.110000000000127 99.99999999999999 17.110000000000127 "
                                                                        fill="none" fill-opacity="1"
                                                                        stroke="#ffffff" stroke-opacity="1"
                                                                        stroke-linecap="butt" stroke-width="2"
                                                                        stroke-dasharray="0" class="apexcharts-area"
                                                                        index="0"
                                                                        clip-path="url(#gridRectMask59bkscrr)"
                                                                        pathTo="M 0 54.23000000000002C 4.999999999999999 54.23000000000002 9.285714285714285 54.52000000000021 14.285714285714285 54.52000000000021C 19.285714285714285 54.52000000000021 23.57142857142857 44.950000000000045 28.57142857142857 44.950000000000045C 33.57142857142857 44.950000000000045 37.857142857142854 27.550000000000182 42.857142857142854 27.550000000000182C 47.857142857142854 27.550000000000182 52.14285714285714 16.5300000000002 57.14285714285714 16.5300000000002C 62.14285714285714 16.5300000000002 66.42857142857142 2.900000000000091 71.42857142857142 2.900000000000091C 76.42857142857142 2.900000000000091 80.71428571428571 8.410000000000082 85.71428571428571 8.410000000000082C 90.71428571428571 8.410000000000082 94.99999999999999 17.110000000000127 99.99999999999999 17.110000000000127"
                                                                        pathFrom="M 0 1276 L 0 1276 L 14.285714285714285 1276 L 28.57142857142857 1276 L 42.857142857142854 1276 L 57.14285714285714 1276 L 71.42857142857142 1276 L 85.71428571428571 1276 L 99.99999999999999 1276"
                                                                        fill-rule="evenodd"></path>
                                                                    <g id="SvgjsG2740"
                                                                        class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown"
                                                                        data:realIndex="0">
                                                                        <g class="apexcharts-series-markers">
                                                                            <circle id="SvgjsCircle2772" r="0"
                                                                                cx="0" cy="0"
                                                                                class="apexcharts-marker w4l6m9rs1 no-pointer-events"
                                                                                stroke="#ffffff" fill="#ffffff"
                                                                                fill-opacity="1" stroke-width="2"
                                                                                stroke-opacity="0.9"
                                                                                default-marker-size="0"></circle>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                                <g id="SvgjsG2741" class="apexcharts-datalabels"
                                                                    data:realIndex="0"></g>
                                                            </g>
                                                            <line id="SvgjsLine2756" x1="0" y1="0"
                                                                x2="100" y2="0" stroke="#b6b6b6"
                                                                stroke-dasharray="0" stroke-width="1"
                                                                stroke-linecap="butt"
                                                                class="apexcharts-ycrosshairs"></line>
                                                            <line id="SvgjsLine2757" x1="0" y1="0"
                                                                x2="100" y2="0" stroke-dasharray="0"
                                                                stroke-width="0" stroke-linecap="butt"
                                                                class="apexcharts-ycrosshairs-hidden"></line>
                                                            <g id="SvgjsG2758" class="apexcharts-xaxis"
                                                                transform="translate(0, 0)">
                                                                <g id="SvgjsG2759" class="apexcharts-xaxis-texts-g"
                                                                    transform="translate(0, -4)"></g>
                                                            </g>
                                                            <g id="SvgjsG2769"
                                                                class="apexcharts-yaxis-annotations apexcharts-hidden-element-shown">
                                                            </g>
                                                            <g id="SvgjsG2770"
                                                                class="apexcharts-xaxis-annotations apexcharts-hidden-element-shown">
                                                            </g>
                                                            <g id="SvgjsG2771"
                                                                class="apexcharts-point-annotations apexcharts-hidden-element-shown">
                                                            </g>
                                                        </g>
                                                    </svg>
                                                    <div class="apexcharts-tooltip apexcharts-theme-light">
                                                        <div class="apexcharts-tooltip-series-group"
                                                            style="order: 1;"><span
                                                                class="apexcharts-tooltip-marker"
                                                                style="background-color: rgb(255, 255, 255);"></span>
                                                            <div class="apexcharts-tooltip-text"
                                                                style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                                <div class="apexcharts-tooltip-y-group"><span
                                                                        class="apexcharts-tooltip-text-y-label"></span><span
                                                                        class="apexcharts-tooltip-text-y-value"></span>
                                                                </div>
                                                                <div class="apexcharts-tooltip-goals-group"><span
                                                                        class="apexcharts-tooltip-text-goals-label"></span><span
                                                                        class="apexcharts-tooltip-text-goals-value"></span>
                                                                </div>
                                                                <div class="apexcharts-tooltip-z-group"><span
                                                                        class="apexcharts-tooltip-text-z-label"></span><span
                                                                        class="apexcharts-tooltip-text-z-value"></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                                        <div class="apexcharts-yaxistooltip-text"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-link col-lg-3 col-md-3 col-sm-12 price-item price-down"
                                    data-komoditas-id="34"
                                    style="--bg-img: url('https://panelharga.badanpangan.go.id/src/assets/img/komoditas-ikon/daging-sapi-murni.png');"
                                    onclick="checkDetails(this)">
                                    <div
                                        style="display:flex;flex-direction:column;justify-content:space-between;align-items:flex-start;height:100%;">
                                        <span class="price-item-title">Daging Sapi Murni</span>
                                        <div
                                            style="display:flex;justify-content:space-between;align-items:flex-end;width:100%;">
                                            <div style="margin-right:12px;font-size:13px;">
                                                <span class="price-item-price"
                                                    style="background-color:transparent;">
                                                    Rp 135.600
                                                </span>
                                                <span class="price-item-per">Rp./Kg</span>
                                                <span class="price-item-increment"
                                                    style="background-color:#ff0000;padding:0px 5px;border-radius:5px;">
                                                    <i class="fa-solid fa-arrow-up" style="margin-right: 4px"></i>
                                                    0.07% - Rp 90
                                                </span>
                                            </div>
                                            <div class="chart" id="chart-34" style="min-height: 60px;">
                                                <div id="apexcharts07inixgz"
                                                    class="apexcharts-canvas apexcharts07inixgz apexcharts-theme-light"
                                                    style="width: 100px; height: 60px;"><svg id="SvgjsSvg2773"
                                                        width="100" height="60"
                                                        xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                                        xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg"
                                                        xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                                        style="background: transparent;">
                                                        <foreignObject x="0" y="0" width="100" height="60">
                                                            <div class="apexcharts-legend"
                                                                xmlns="http://www.w3.org/1999/xhtml"
                                                                style="max-height: 30px;"></div>
                                                        </foreignObject>
                                                        <rect id="SvgjsRect2777" width="0" height="0"
                                                            x="0" y="0" rx="0" ry="0"
                                                            opacity="1" stroke-width="0" stroke="none"
                                                            stroke-dasharray="0" fill="#fefefe"></rect>
                                                        <g id="SvgjsG2811" class="apexcharts-yaxis" rel="0"
                                                            transform="translate(-18, 0)"></g>
                                                        <g id="SvgjsG2775"
                                                            class="apexcharts-inner apexcharts-graphical"
                                                            transform="translate(0, 1)">
                                                            <defs id="SvgjsDefs2774">
                                                                <clipPath id="gridRectMask07inixgz">
                                                                    <rect id="SvgjsRect2779" width="106"
                                                                        height="64" x="-3" y="-3" rx="0"
                                                                        ry="0" opacity="1"
                                                                        stroke-width="0" stroke="none"
                                                                        stroke-dasharray="0" fill="#fff"></rect>
                                                                </clipPath>
                                                                <clipPath id="forecastMask07inixgz"></clipPath>
                                                                <clipPath id="nonForecastMask07inixgz"></clipPath>
                                                                <clipPath id="gridRectMarkerMask07inixgz">
                                                                    <rect id="SvgjsRect2780" width="104"
                                                                        height="62" x="-2" y="-2" rx="0"
                                                                        ry="0" opacity="1"
                                                                        stroke-width="0" stroke="none"
                                                                        stroke-dasharray="0" fill="#fff"></rect>
                                                                </clipPath>
                                                                <linearGradient id="SvgjsLinearGradient2785"
                                                                    x1="0" y1="0" x2="0"
                                                                    y2="1">
                                                                    <stop id="SvgjsStop2786" stop-opacity="0.65"
                                                                        stop-color="rgba(255,255,255,0.65)"
                                                                        offset="0"></stop>
                                                                    <stop id="SvgjsStop2787" stop-opacity="0.5"
                                                                        stop-color="rgba(128,135,255,0.5)"
                                                                        offset="1"></stop>
                                                                    <stop id="SvgjsStop2788" stop-opacity="0.5"
                                                                        stop-color="rgba(128,135,255,0.5)"
                                                                        offset="1"></stop>
                                                                </linearGradient>
                                                            </defs>
                                                            <line id="SvgjsLine2778" x1="0" y1="0"
                                                                x2="0" y2="58" stroke="#b6b6b6"
                                                                stroke-dasharray="3" stroke-linecap="butt"
                                                                class="apexcharts-xcrosshairs" x="0" y="0"
                                                                width="1" height="58" fill="#b1b9c4"
                                                                filter="none" fill-opacity="0.9"
                                                                stroke-width="1"></line>
                                                            <g id="SvgjsG2791" class="apexcharts-grid">
                                                                <g id="SvgjsG2792"
                                                                    class="apexcharts-gridlines-horizontal"
                                                                    style="display: none;">
                                                                    <line id="SvgjsLine2795" x1="0"
                                                                        y1="0" x2="100"
                                                                        y2="0" stroke="#e0e0e0"
                                                                        stroke-dasharray="0" stroke-linecap="butt"
                                                                        class="apexcharts-gridline"></line>
                                                                    <line id="SvgjsLine2796" x1="0"
                                                                        y1="58" x2="100"
                                                                        y2="58" stroke="#e0e0e0"
                                                                        stroke-dasharray="0" stroke-linecap="butt"
                                                                        class="apexcharts-gridline"></line>
                                                                </g>
                                                                <g id="SvgjsG2793"
                                                                    class="apexcharts-gridlines-vertical"
                                                                    style="display: none;"></g>
                                                                <line id="SvgjsLine2798" x1="0"
                                                                    y1="58" x2="100" y2="58"
                                                                    stroke="transparent" stroke-dasharray="0"
                                                                    stroke-linecap="butt"></line>
                                                                <line id="SvgjsLine2797" x1="0"
                                                                    y1="1" x2="0" y2="58"
                                                                    stroke="transparent" stroke-dasharray="0"
                                                                    stroke-linecap="butt"></line>
                                                            </g>
                                                            <g id="SvgjsG2794" class="apexcharts-grid-borders"
                                                                style="display: none;"></g>
                                                            <g id="SvgjsG2781"
                                                                class="apexcharts-area-series apexcharts-plot-series">
                                                                <g id="SvgjsG2782" class="apexcharts-series"
                                                                    zIndex="0" seriesName="series-1"
                                                                    data:longestSeries="true" rel="1"
                                                                    data:realIndex="0">
                                                                    <path id="SvgjsPath2789"
                                                                        d="M0 4.349999999998545C4.999999999999999 4.349999999998545 9.285714285714285 42.04999999999927 14.285714285714285 42.04999999999927C19.285714285714285 42.04999999999927 23.57142857142857 7.25 28.57142857142857 7.25C33.57142857142857 7.25 37.857142857142854 21.75 42.857142857142854 21.75C47.857142857142854 21.75 52.14285714285714 52.19999999999709 57.14285714285714 52.19999999999709C62.14285714285714 52.19999999999709 66.42857142857142 15.94999999999709 71.42857142857142 15.94999999999709C76.42857142857142 15.94999999999709 80.71428571428571 27.549999999999272 85.71428571428571 27.549999999999272C90.71428571428571 27.549999999999272 94.99999999999999 14.5 99.99999999999999 14.5C99.99999999999999 14.5 99.99999999999999 14.5 99.99999999999999 58L0 58C0 58 0 4.349999999998545 0 4.349999999998545 "
                                                                        fill="url(#SvgjsLinearGradient2785)"
                                                                        fill-opacity="1" stroke-opacity="1"
                                                                        stroke-linecap="butt" stroke-width="0"
                                                                        stroke-dasharray="0" class="apexcharts-area"
                                                                        index="0"
                                                                        clip-path="url(#gridRectMask07inixgz)"
                                                                        pathTo="M 0 4.349999999998545C 4.999999999999999 4.349999999998545 9.285714285714285 42.04999999999927 14.285714285714285 42.04999999999927C 19.285714285714285 42.04999999999927 23.57142857142857 7.25 28.57142857142857 7.25C 33.57142857142857 7.25 37.857142857142854 21.75 42.857142857142854 21.75C 47.857142857142854 21.75 52.14285714285714 52.19999999999709 57.14285714285714 52.19999999999709C 62.14285714285714 52.19999999999709 66.42857142857142 15.94999999999709 71.42857142857142 15.94999999999709C 76.42857142857142 15.94999999999709 80.71428571428571 27.549999999999272 85.71428571428571 27.549999999999272C 90.71428571428571 27.549999999999272 94.99999999999999 14.5 99.99999999999999 14.5C 99.99999999999999 14.5 99.99999999999999 14.5 99.99999999999999 58 L 0 58z"
                                                                        pathFrom="M 0 19676.5 L 0 19676.5 L 14.285714285714285 19676.5 L 28.57142857142857 19676.5 L 42.857142857142854 19676.5 L 57.14285714285714 19676.5 L 71.42857142857142 19676.5 L 85.71428571428571 19676.5 L 99.99999999999999 19676.5 L 0 19676.5">
                                                                    </path>
                                                                    <path id="SvgjsPath2790"
                                                                        d="M0 4.349999999998545C4.999999999999999 4.349999999998545 9.285714285714285 42.04999999999927 14.285714285714285 42.04999999999927C19.285714285714285 42.04999999999927 23.57142857142857 7.25 28.57142857142857 7.25C33.57142857142857 7.25 37.857142857142854 21.75 42.857142857142854 21.75C47.857142857142854 21.75 52.14285714285714 52.19999999999709 57.14285714285714 52.19999999999709C62.14285714285714 52.19999999999709 66.42857142857142 15.94999999999709 71.42857142857142 15.94999999999709C76.42857142857142 15.94999999999709 80.71428571428571 27.549999999999272 85.71428571428571 27.549999999999272C90.71428571428571 27.549999999999272 94.99999999999999 14.5 99.99999999999999 14.5C99.99999999999999 14.5 99.99999999999999 14.5 99.99999999999999 14.5 "
                                                                        fill="none" fill-opacity="1"
                                                                        stroke="#ffffff" stroke-opacity="1"
                                                                        stroke-linecap="butt" stroke-width="2"
                                                                        stroke-dasharray="0" class="apexcharts-area"
                                                                        index="0"
                                                                        clip-path="url(#gridRectMask07inixgz)"
                                                                        pathTo="M 0 4.349999999998545C 4.999999999999999 4.349999999998545 9.285714285714285 42.04999999999927 14.285714285714285 42.04999999999927C 19.285714285714285 42.04999999999927 23.57142857142857 7.25 28.57142857142857 7.25C 33.57142857142857 7.25 37.857142857142854 21.75 42.857142857142854 21.75C 47.857142857142854 21.75 52.14285714285714 52.19999999999709 57.14285714285714 52.19999999999709C 62.14285714285714 52.19999999999709 66.42857142857142 15.94999999999709 71.42857142857142 15.94999999999709C 76.42857142857142 15.94999999999709 80.71428571428571 27.549999999999272 85.71428571428571 27.549999999999272C 90.71428571428571 27.549999999999272 94.99999999999999 14.5 99.99999999999999 14.5"
                                                                        pathFrom="M 0 19676.5 L 0 19676.5 L 14.285714285714285 19676.5 L 28.57142857142857 19676.5 L 42.857142857142854 19676.5 L 57.14285714285714 19676.5 L 71.42857142857142 19676.5 L 85.71428571428571 19676.5 L 99.99999999999999 19676.5"
                                                                        fill-rule="evenodd"></path>
                                                                    <g id="SvgjsG2783"
                                                                        class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown"
                                                                        data:realIndex="0">
                                                                        <g class="apexcharts-series-markers">
                                                                            <circle id="SvgjsCircle2815" r="0"
                                                                                cx="0" cy="0"
                                                                                class="apexcharts-marker win1k80z3i no-pointer-events"
                                                                                stroke="#ffffff" fill="#ffffff"
                                                                                fill-opacity="1" stroke-width="2"
                                                                                stroke-opacity="0.9"
                                                                                default-marker-size="0"></circle>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                                <g id="SvgjsG2784" class="apexcharts-datalabels"
                                                                    data:realIndex="0"></g>
                                                            </g>
                                                            <line id="SvgjsLine2799" x1="0" y1="0"
                                                                x2="100" y2="0" stroke="#b6b6b6"
                                                                stroke-dasharray="0" stroke-width="1"
                                                                stroke-linecap="butt"
                                                                class="apexcharts-ycrosshairs"></line>
                                                            <line id="SvgjsLine2800" x1="0" y1="0"
                                                                x2="100" y2="0" stroke-dasharray="0"
                                                                stroke-width="0" stroke-linecap="butt"
                                                                class="apexcharts-ycrosshairs-hidden"></line>
                                                            <g id="SvgjsG2801" class="apexcharts-xaxis"
                                                                transform="translate(0, 0)">
                                                                <g id="SvgjsG2802" class="apexcharts-xaxis-texts-g"
                                                                    transform="translate(0, -4)"></g>
                                                            </g>
                                                            <g id="SvgjsG2812"
                                                                class="apexcharts-yaxis-annotations apexcharts-hidden-element-shown">
                                                            </g>
                                                            <g id="SvgjsG2813"
                                                                class="apexcharts-xaxis-annotations apexcharts-hidden-element-shown">
                                                            </g>
                                                            <g id="SvgjsG2814"
                                                                class="apexcharts-point-annotations apexcharts-hidden-element-shown">
                                                            </g>
                                                        </g>
                                                    </svg>
                                                    <div class="apexcharts-tooltip apexcharts-theme-light">
                                                        <div class="apexcharts-tooltip-series-group"
                                                            style="order: 1;"><span
                                                                class="apexcharts-tooltip-marker"
                                                                style="background-color: rgb(255, 255, 255);"></span>
                                                            <div class="apexcharts-tooltip-text"
                                                                style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                                <div class="apexcharts-tooltip-y-group"><span
                                                                        class="apexcharts-tooltip-text-y-label"></span><span
                                                                        class="apexcharts-tooltip-text-y-value"></span>
                                                                </div>
                                                                <div class="apexcharts-tooltip-goals-group"><span
                                                                        class="apexcharts-tooltip-text-goals-label"></span><span
                                                                        class="apexcharts-tooltip-text-goals-value"></span>
                                                                </div>
                                                                <div class="apexcharts-tooltip-z-group"><span
                                                                        class="apexcharts-tooltip-text-z-label"></span><span
                                                                        class="apexcharts-tooltip-text-z-value"></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                                        <div class="apexcharts-yaxistooltip-text"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-link col-lg-3 col-md-3 col-sm-12 price-item price-down"
                                    data-komoditas-id="35"
                                    style="--bg-img: url('https://panelharga.badanpangan.go.id/src/assets/img/komoditas-ikon/daging-ayam-ras.png');"
                                    onclick="checkDetails(this)">
                                    <div
                                        style="display:flex;flex-direction:column;justify-content:space-between;align-items:flex-start;height:100%;">
                                        <span class="price-item-title">Daging Ayam Ras</span>
                                        <div
                                            style="display:flex;justify-content:space-between;align-items:flex-end;width:100%;">
                                            <div style="margin-right:12px;font-size:13px;">
                                                <span class="price-item-price"
                                                    style="background-color:transparent;">
                                                    Rp 37.830
                                                </span>
                                                <span class="price-item-per">Rp./Kg</span>
                                                <span class="price-item-increment"
                                                    style="background-color:#ff0000;padding:0px 5px;border-radius:5px;">
                                                    <i class="fa-solid fa-arrow-up" style="margin-right: 4px"></i>
                                                    0.05% - Rp 20
                                                </span>
                                            </div>
                                            <div class="chart" id="chart-35" style="min-height: 60px;">
                                                <div id="apexchartsc5s3y95w"
                                                    class="apexcharts-canvas apexchartsc5s3y95w apexcharts-theme-light"
                                                    style="width: 100px; height: 60px;"><svg id="SvgjsSvg2816"
                                                        width="100" height="60"
                                                        xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                                        xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg"
                                                        xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                                        style="background: transparent;">
                                                        <foreignObject x="0" y="0" width="100" height="60">
                                                            <div class="apexcharts-legend"
                                                                xmlns="http://www.w3.org/1999/xhtml"
                                                                style="max-height: 30px;"></div>
                                                        </foreignObject>
                                                        <rect id="SvgjsRect2820" width="0" height="0"
                                                            x="0" y="0" rx="0" ry="0"
                                                            opacity="1" stroke-width="0" stroke="none"
                                                            stroke-dasharray="0" fill="#fefefe"></rect>
                                                        <g id="SvgjsG2854" class="apexcharts-yaxis" rel="0"
                                                            transform="translate(-18, 0)"></g>
                                                        <g id="SvgjsG2818"
                                                            class="apexcharts-inner apexcharts-graphical"
                                                            transform="translate(0, 1)">
                                                            <defs id="SvgjsDefs2817">
                                                                <clipPath id="gridRectMaskc5s3y95w">
                                                                    <rect id="SvgjsRect2822" width="106"
                                                                        height="64" x="-3" y="-3" rx="0"
                                                                        ry="0" opacity="1"
                                                                        stroke-width="0" stroke="none"
                                                                        stroke-dasharray="0" fill="#fff"></rect>
                                                                </clipPath>
                                                                <clipPath id="forecastMaskc5s3y95w"></clipPath>
                                                                <clipPath id="nonForecastMaskc5s3y95w"></clipPath>
                                                                <clipPath id="gridRectMarkerMaskc5s3y95w">
                                                                    <rect id="SvgjsRect2823" width="104"
                                                                        height="62" x="-2" y="-2" rx="0"
                                                                        ry="0" opacity="1"
                                                                        stroke-width="0" stroke="none"
                                                                        stroke-dasharray="0" fill="#fff"></rect>
                                                                </clipPath>
                                                                <linearGradient id="SvgjsLinearGradient2828"
                                                                    x1="0" y1="0" x2="0"
                                                                    y2="1">
                                                                    <stop id="SvgjsStop2829" stop-opacity="0.65"
                                                                        stop-color="rgba(255,255,255,0.65)"
                                                                        offset="0"></stop>
                                                                    <stop id="SvgjsStop2830" stop-opacity="0.5"
                                                                        stop-color="rgba(128,135,255,0.5)"
                                                                        offset="1"></stop>
                                                                    <stop id="SvgjsStop2831" stop-opacity="0.5"
                                                                        stop-color="rgba(128,135,255,0.5)"
                                                                        offset="1"></stop>
                                                                </linearGradient>
                                                            </defs>
                                                            <line id="SvgjsLine2821" x1="0" y1="0"
                                                                x2="0" y2="58" stroke="#b6b6b6"
                                                                stroke-dasharray="3" stroke-linecap="butt"
                                                                class="apexcharts-xcrosshairs" x="0" y="0"
                                                                width="1" height="58" fill="#b1b9c4"
                                                                filter="none" fill-opacity="0.9"
                                                                stroke-width="1"></line>
                                                            <g id="SvgjsG2834" class="apexcharts-grid">
                                                                <g id="SvgjsG2835"
                                                                    class="apexcharts-gridlines-horizontal"
                                                                    style="display: none;">
                                                                    <line id="SvgjsLine2838" x1="0"
                                                                        y1="0" x2="100"
                                                                        y2="0" stroke="#e0e0e0"
                                                                        stroke-dasharray="0" stroke-linecap="butt"
                                                                        class="apexcharts-gridline"></line>
                                                                    <line id="SvgjsLine2839" x1="0"
                                                                        y1="58" x2="100"
                                                                        y2="58" stroke="#e0e0e0"
                                                                        stroke-dasharray="0" stroke-linecap="butt"
                                                                        class="apexcharts-gridline"></line>
                                                                </g>
                                                                <g id="SvgjsG2836"
                                                                    class="apexcharts-gridlines-vertical"
                                                                    style="display: none;"></g>
                                                                <line id="SvgjsLine2841" x1="0"
                                                                    y1="58" x2="100" y2="58"
                                                                    stroke="transparent" stroke-dasharray="0"
                                                                    stroke-linecap="butt"></line>
                                                                <line id="SvgjsLine2840" x1="0"
                                                                    y1="1" x2="0" y2="58"
                                                                    stroke="transparent" stroke-dasharray="0"
                                                                    stroke-linecap="butt"></line>
                                                            </g>
                                                            <g id="SvgjsG2837" class="apexcharts-grid-borders"
                                                                style="display: none;"></g>
                                                            <g id="SvgjsG2824"
                                                                class="apexcharts-area-series apexcharts-plot-series">
                                                                <g id="SvgjsG2825" class="apexcharts-series"
                                                                    zIndex="0" seriesName="series-1"
                                                                    data:longestSeries="true" rel="1"
                                                                    data:realIndex="0">
                                                                    <path id="SvgjsPath2832"
                                                                        d="M0 55.68000000000029C4.999999999999999 55.68000000000029 9.285714285714285 11.600000000000364 14.285714285714285 11.600000000000364C19.285714285714285 11.600000000000364 23.57142857142857 4.640000000000327 28.57142857142857 4.640000000000327C33.57142857142857 4.640000000000327 37.857142857142854 13.920000000000073 42.857142857142854 13.920000000000073C47.857142857142854 13.920000000000073 52.14285714285714 20.88000000000011 57.14285714285714 20.88000000000011C62.14285714285714 20.88000000000011 66.42857142857142 22.039999999999964 71.42857142857142 22.039999999999964C76.42857142857142 22.039999999999964 80.71428571428571 51.039999999999964 85.71428571428571 51.039999999999964C90.71428571428571 51.039999999999964 94.99999999999999 48.720000000000255 99.99999999999999 48.720000000000255C99.99999999999999 48.720000000000255 99.99999999999999 48.720000000000255 99.99999999999999 58L0 58C0 58 0 55.68000000000029 0 55.68000000000029 "
                                                                        fill="url(#SvgjsLinearGradient2828)"
                                                                        fill-opacity="1" stroke-opacity="1"
                                                                        stroke-linecap="butt" stroke-width="0"
                                                                        stroke-dasharray="0" class="apexcharts-area"
                                                                        index="0"
                                                                        clip-path="url(#gridRectMaskc5s3y95w)"
                                                                        pathTo="M 0 55.68000000000029C 4.999999999999999 55.68000000000029 9.285714285714285 11.600000000000364 14.285714285714285 11.600000000000364C 19.285714285714285 11.600000000000364 23.57142857142857 4.640000000000327 28.57142857142857 4.640000000000327C 33.57142857142857 4.640000000000327 37.857142857142854 13.920000000000073 42.857142857142854 13.920000000000073C 47.857142857142854 13.920000000000073 52.14285714285714 20.88000000000011 57.14285714285714 20.88000000000011C 62.14285714285714 20.88000000000011 66.42857142857142 22.039999999999964 71.42857142857142 22.039999999999964C 76.42857142857142 22.039999999999964 80.71428571428571 51.039999999999964 85.71428571428571 51.039999999999964C 90.71428571428571 51.039999999999964 94.99999999999999 48.720000000000255 99.99999999999999 48.720000000000255C 99.99999999999999 48.720000000000255 99.99999999999999 48.720000000000255 99.99999999999999 58 L 0 58z"
                                                                        pathFrom="M 0 4437 L 0 4437 L 14.285714285714285 4437 L 28.57142857142857 4437 L 42.857142857142854 4437 L 57.14285714285714 4437 L 71.42857142857142 4437 L 85.71428571428571 4437 L 99.99999999999999 4437 L 0 4437">
                                                                    </path>
                                                                    <path id="SvgjsPath2833"
                                                                        d="M0 55.68000000000029C4.999999999999999 55.68000000000029 9.285714285714285 11.600000000000364 14.285714285714285 11.600000000000364C19.285714285714285 11.600000000000364 23.57142857142857 4.640000000000327 28.57142857142857 4.640000000000327C33.57142857142857 4.640000000000327 37.857142857142854 13.920000000000073 42.857142857142854 13.920000000000073C47.857142857142854 13.920000000000073 52.14285714285714 20.88000000000011 57.14285714285714 20.88000000000011C62.14285714285714 20.88000000000011 66.42857142857142 22.039999999999964 71.42857142857142 22.039999999999964C76.42857142857142 22.039999999999964 80.71428571428571 51.039999999999964 85.71428571428571 51.039999999999964C90.71428571428571 51.039999999999964 94.99999999999999 48.720000000000255 99.99999999999999 48.720000000000255C99.99999999999999 48.720000000000255 99.99999999999999 48.720000000000255 99.99999999999999 48.720000000000255 "
                                                                        fill="none" fill-opacity="1"
                                                                        stroke="#ffffff" stroke-opacity="1"
                                                                        stroke-linecap="butt" stroke-width="2"
                                                                        stroke-dasharray="0" class="apexcharts-area"
                                                                        index="0"
                                                                        clip-path="url(#gridRectMaskc5s3y95w)"
                                                                        pathTo="M 0 55.68000000000029C 4.999999999999999 55.68000000000029 9.285714285714285 11.600000000000364 14.285714285714285 11.600000000000364C 19.285714285714285 11.600000000000364 23.57142857142857 4.640000000000327 28.57142857142857 4.640000000000327C 33.57142857142857 4.640000000000327 37.857142857142854 13.920000000000073 42.857142857142854 13.920000000000073C 47.857142857142854 13.920000000000073 52.14285714285714 20.88000000000011 57.14285714285714 20.88000000000011C 62.14285714285714 20.88000000000011 66.42857142857142 22.039999999999964 71.42857142857142 22.039999999999964C 76.42857142857142 22.039999999999964 80.71428571428571 51.039999999999964 85.71428571428571 51.039999999999964C 90.71428571428571 51.039999999999964 94.99999999999999 48.720000000000255 99.99999999999999 48.720000000000255"
                                                                        pathFrom="M 0 4437 L 0 4437 L 14.285714285714285 4437 L 28.57142857142857 4437 L 42.857142857142854 4437 L 57.14285714285714 4437 L 71.42857142857142 4437 L 85.71428571428571 4437 L 99.99999999999999 4437"
                                                                        fill-rule="evenodd"></path>
                                                                    <g id="SvgjsG2826"
                                                                        class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown"
                                                                        data:realIndex="0">
                                                                        <g class="apexcharts-series-markers">
                                                                            <circle id="SvgjsCircle2858" r="0"
                                                                                cx="0" cy="0"
                                                                                class="apexcharts-marker wxc3h6dgwi no-pointer-events"
                                                                                stroke="#ffffff" fill="#ffffff"
                                                                                fill-opacity="1" stroke-width="2"
                                                                                stroke-opacity="0.9"
                                                                                default-marker-size="0"></circle>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                                <g id="SvgjsG2827" class="apexcharts-datalabels"
                                                                    data:realIndex="0"></g>
                                                            </g>
                                                            <line id="SvgjsLine2842" x1="0" y1="0"
                                                                x2="100" y2="0" stroke="#b6b6b6"
                                                                stroke-dasharray="0" stroke-width="1"
                                                                stroke-linecap="butt"
                                                                class="apexcharts-ycrosshairs"></line>
                                                            <line id="SvgjsLine2843" x1="0" y1="0"
                                                                x2="100" y2="0" stroke-dasharray="0"
                                                                stroke-width="0" stroke-linecap="butt"
                                                                class="apexcharts-ycrosshairs-hidden"></line>
                                                            <g id="SvgjsG2844" class="apexcharts-xaxis"
                                                                transform="translate(0, 0)">
                                                                <g id="SvgjsG2845" class="apexcharts-xaxis-texts-g"
                                                                    transform="translate(0, -4)"></g>
                                                            </g>
                                                            <g id="SvgjsG2855"
                                                                class="apexcharts-yaxis-annotations apexcharts-hidden-element-shown">
                                                            </g>
                                                            <g id="SvgjsG2856"
                                                                class="apexcharts-xaxis-annotations apexcharts-hidden-element-shown">
                                                            </g>
                                                            <g id="SvgjsG2857"
                                                                class="apexcharts-point-annotations apexcharts-hidden-element-shown">
                                                            </g>
                                                        </g>
                                                    </svg>
                                                    <div class="apexcharts-tooltip apexcharts-theme-light">
                                                        <div class="apexcharts-tooltip-series-group"
                                                            style="order: 1;"><span
                                                                class="apexcharts-tooltip-marker"
                                                                style="background-color: rgb(255, 255, 255);"></span>
                                                            <div class="apexcharts-tooltip-text"
                                                                style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                                <div class="apexcharts-tooltip-y-group"><span
                                                                        class="apexcharts-tooltip-text-y-label"></span><span
                                                                        class="apexcharts-tooltip-text-y-value"></span>
                                                                </div>
                                                                <div class="apexcharts-tooltip-goals-group"><span
                                                                        class="apexcharts-tooltip-text-goals-label"></span><span
                                                                        class="apexcharts-tooltip-text-goals-value"></span>
                                                                </div>
                                                                <div class="apexcharts-tooltip-z-group"><span
                                                                        class="apexcharts-tooltip-text-z-label"></span><span
                                                                        class="apexcharts-tooltip-text-z-value"></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                                        <div class="apexcharts-yaxistooltip-text"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-link col-lg-3 col-md-3 col-sm-12 price-item price-up"
                                    data-komoditas-id="36"
                                    style="--bg-img: url('https://panelharga.badanpangan.go.id/src/assets/img/komoditas-ikon/telur-ayam-ras.png');"
                                    onclick="checkDetails(this)">
                                    <div
                                        style="display:flex;flex-direction:column;justify-content:space-between;align-items:flex-start;height:100%;">
                                        <span class="price-item-title">Telur Ayam Ras</span>
                                        <div
                                            style="display:flex;justify-content:space-between;align-items:flex-end;width:100%;">
                                            <div style="margin-right:12px;font-size:13px;">
                                                <span class="price-item-price"
                                                    style="background-color:transparent;">
                                                    Rp 30.350
                                                </span>
                                                <span class="price-item-per">Rp./Kg</span>
                                                <span class="price-item-increment"
                                                    style="background-color:#008000;padding:0px 5px;border-radius:5px;">
                                                    <i class="fa-solid fa-arrow-down" style="margin-right: 4px"></i>
                                                    -0.20% - Rp -60
                                                </span>
                                            </div>
                                            <div class="chart" id="chart-36" style="min-height: 60px;">
                                                <div id="apexchartsz7qrzs5nk"
                                                    class="apexcharts-canvas apexchartsz7qrzs5nk apexcharts-theme-light"
                                                    style="width: 100px; height: 60px;"><svg id="SvgjsSvg2859"
                                                        width="100" height="60"
                                                        xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                                        xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg"
                                                        xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                                        style="background: transparent;">
                                                        <foreignObject x="0" y="0" width="100" height="60">
                                                            <div class="apexcharts-legend"
                                                                xmlns="http://www.w3.org/1999/xhtml"
                                                                style="max-height: 30px;"></div>
                                                        </foreignObject>
                                                        <rect id="SvgjsRect2863" width="0" height="0"
                                                            x="0" y="0" rx="0" ry="0"
                                                            opacity="1" stroke-width="0" stroke="none"
                                                            stroke-dasharray="0" fill="#fefefe"></rect>
                                                        <g id="SvgjsG2897" class="apexcharts-yaxis" rel="0"
                                                            transform="translate(-18, 0)"></g>
                                                        <g id="SvgjsG2861"
                                                            class="apexcharts-inner apexcharts-graphical"
                                                            transform="translate(0, 1)">
                                                            <defs id="SvgjsDefs2860">
                                                                <clipPath id="gridRectMaskz7qrzs5nk">
                                                                    <rect id="SvgjsRect2865" width="106"
                                                                        height="64" x="-3" y="-3" rx="0"
                                                                        ry="0" opacity="1"
                                                                        stroke-width="0" stroke="none"
                                                                        stroke-dasharray="0" fill="#fff"></rect>
                                                                </clipPath>
                                                                <clipPath id="forecastMaskz7qrzs5nk"></clipPath>
                                                                <clipPath id="nonForecastMaskz7qrzs5nk"></clipPath>
                                                                <clipPath id="gridRectMarkerMaskz7qrzs5nk">
                                                                    <rect id="SvgjsRect2866" width="104"
                                                                        height="62" x="-2" y="-2" rx="0"
                                                                        ry="0" opacity="1"
                                                                        stroke-width="0" stroke="none"
                                                                        stroke-dasharray="0" fill="#fff"></rect>
                                                                </clipPath>
                                                                <linearGradient id="SvgjsLinearGradient2871"
                                                                    x1="0" y1="0" x2="0"
                                                                    y2="1">
                                                                    <stop id="SvgjsStop2872" stop-opacity="0.65"
                                                                        stop-color="rgba(255,255,255,0.65)"
                                                                        offset="0"></stop>
                                                                    <stop id="SvgjsStop2873" stop-opacity="0.5"
                                                                        stop-color="rgba(128,135,255,0.5)"
                                                                        offset="1"></stop>
                                                                    <stop id="SvgjsStop2874" stop-opacity="0.5"
                                                                        stop-color="rgba(128,135,255,0.5)"
                                                                        offset="1"></stop>
                                                                </linearGradient>
                                                            </defs>
                                                            <line id="SvgjsLine2864" x1="0" y1="0"
                                                                x2="0" y2="58" stroke="#b6b6b6"
                                                                stroke-dasharray="3" stroke-linecap="butt"
                                                                class="apexcharts-xcrosshairs" x="0" y="0"
                                                                width="1" height="58" fill="#b1b9c4"
                                                                filter="none" fill-opacity="0.9"
                                                                stroke-width="1"></line>
                                                            <g id="SvgjsG2877" class="apexcharts-grid">
                                                                <g id="SvgjsG2878"
                                                                    class="apexcharts-gridlines-horizontal"
                                                                    style="display: none;">
                                                                    <line id="SvgjsLine2881" x1="0"
                                                                        y1="0" x2="100"
                                                                        y2="0" stroke="#e0e0e0"
                                                                        stroke-dasharray="0" stroke-linecap="butt"
                                                                        class="apexcharts-gridline"></line>
                                                                    <line id="SvgjsLine2882" x1="0"
                                                                        y1="58" x2="100"
                                                                        y2="58" stroke="#e0e0e0"
                                                                        stroke-dasharray="0" stroke-linecap="butt"
                                                                        class="apexcharts-gridline"></line>
                                                                </g>
                                                                <g id="SvgjsG2879"
                                                                    class="apexcharts-gridlines-vertical"
                                                                    style="display: none;"></g>
                                                                <line id="SvgjsLine2884" x1="0"
                                                                    y1="58" x2="100" y2="58"
                                                                    stroke="transparent" stroke-dasharray="0"
                                                                    stroke-linecap="butt"></line>
                                                                <line id="SvgjsLine2883" x1="0"
                                                                    y1="1" x2="0" y2="58"
                                                                    stroke="transparent" stroke-dasharray="0"
                                                                    stroke-linecap="butt"></line>
                                                            </g>
                                                            <g id="SvgjsG2880" class="apexcharts-grid-borders"
                                                                style="display: none;"></g>
                                                            <g id="SvgjsG2867"
                                                                class="apexcharts-area-series apexcharts-plot-series">
                                                                <g id="SvgjsG2868" class="apexcharts-series"
                                                                    zIndex="0" seriesName="series-1"
                                                                    data:longestSeries="true" rel="1"
                                                                    data:realIndex="0">
                                                                    <path id="SvgjsPath2875"
                                                                        d="M0 53.35999999999967C4.999999999999999 53.35999999999967 9.285714285714285 25.519999999999527 14.285714285714285 25.519999999999527C19.285714285714285 25.519999999999527 23.57142857142857 2.319999999999709 28.57142857142857 2.319999999999709C33.57142857142857 2.319999999999709 37.857142857142854 13.919999999999163 42.857142857142854 13.919999999999163C47.857142857142854 13.919999999999163 52.14285714285714 23.199999999999818 57.14285714285714 23.199999999999818C62.14285714285714 23.199999999999818 66.42857142857142 25.519999999999527 71.42857142857142 25.519999999999527C76.42857142857142 25.519999999999527 80.71428571428571 44.07999999999993 85.71428571428571 44.07999999999993C90.71428571428571 44.07999999999993 94.99999999999999 58 99.99999999999999 58C99.99999999999999 58 99.99999999999999 58 99.99999999999999 58L0 58C0 58 0 53.35999999999967 0 53.35999999999967 "
                                                                        fill="url(#SvgjsLinearGradient2871)"
                                                                        fill-opacity="1" stroke-opacity="1"
                                                                        stroke-linecap="butt" stroke-width="0"
                                                                        stroke-dasharray="0" class="apexcharts-area"
                                                                        index="0"
                                                                        clip-path="url(#gridRectMaskz7qrzs5nk)"
                                                                        pathTo="M 0 53.35999999999967C 4.999999999999999 53.35999999999967 9.285714285714285 25.519999999999527 14.285714285714285 25.519999999999527C 19.285714285714285 25.519999999999527 23.57142857142857 2.319999999999709 28.57142857142857 2.319999999999709C 33.57142857142857 2.319999999999709 37.857142857142854 13.919999999999163 42.857142857142854 13.919999999999163C 47.857142857142854 13.919999999999163 52.14285714285714 23.199999999999818 57.14285714285714 23.199999999999818C 62.14285714285714 23.199999999999818 66.42857142857142 25.519999999999527 71.42857142857142 25.519999999999527C 76.42857142857142 25.519999999999527 80.71428571428571 44.07999999999993 85.71428571428571 44.07999999999993C 90.71428571428571 44.07999999999993 94.99999999999999 58 99.99999999999999 58C 99.99999999999999 58 99.99999999999999 58 99.99999999999999 58 L 0 58z"
                                                                        pathFrom="M 0 7099.199999999999 L 0 7099.199999999999 L 14.285714285714285 7099.199999999999 L 28.57142857142857 7099.199999999999 L 42.857142857142854 7099.199999999999 L 57.14285714285714 7099.199999999999 L 71.42857142857142 7099.199999999999 L 85.71428571428571 7099.199999999999 L 99.99999999999999 7099.199999999999 L 0 7099.199999999999">
                                                                    </path>
                                                                    <path id="SvgjsPath2876"
                                                                        d="M0 53.35999999999967C4.999999999999999 53.35999999999967 9.285714285714285 25.519999999999527 14.285714285714285 25.519999999999527C19.285714285714285 25.519999999999527 23.57142857142857 2.319999999999709 28.57142857142857 2.319999999999709C33.57142857142857 2.319999999999709 37.857142857142854 13.919999999999163 42.857142857142854 13.919999999999163C47.857142857142854 13.919999999999163 52.14285714285714 23.199999999999818 57.14285714285714 23.199999999999818C62.14285714285714 23.199999999999818 66.42857142857142 25.519999999999527 71.42857142857142 25.519999999999527C76.42857142857142 25.519999999999527 80.71428571428571 44.07999999999993 85.71428571428571 44.07999999999993C90.71428571428571 44.07999999999993 94.99999999999999 58 99.99999999999999 58C99.99999999999999 58 99.99999999999999 58 99.99999999999999 58 "
                                                                        fill="none" fill-opacity="1"
                                                                        stroke="#ffffff" stroke-opacity="1"
                                                                        stroke-linecap="butt" stroke-width="2"
                                                                        stroke-dasharray="0" class="apexcharts-area"
                                                                        index="0"
                                                                        clip-path="url(#gridRectMaskz7qrzs5nk)"
                                                                        pathTo="M 0 53.35999999999967C 4.999999999999999 53.35999999999967 9.285714285714285 25.519999999999527 14.285714285714285 25.519999999999527C 19.285714285714285 25.519999999999527 23.57142857142857 2.319999999999709 28.57142857142857 2.319999999999709C 33.57142857142857 2.319999999999709 37.857142857142854 13.919999999999163 42.857142857142854 13.919999999999163C 47.857142857142854 13.919999999999163 52.14285714285714 23.199999999999818 57.14285714285714 23.199999999999818C 62.14285714285714 23.199999999999818 66.42857142857142 25.519999999999527 71.42857142857142 25.519999999999527C 76.42857142857142 25.519999999999527 80.71428571428571 44.07999999999993 85.71428571428571 44.07999999999993C 90.71428571428571 44.07999999999993 94.99999999999999 58 99.99999999999999 58"
                                                                        pathFrom="M 0 7099.199999999999 L 0 7099.199999999999 L 14.285714285714285 7099.199999999999 L 28.57142857142857 7099.199999999999 L 42.857142857142854 7099.199999999999 L 57.14285714285714 7099.199999999999 L 71.42857142857142 7099.199999999999 L 85.71428571428571 7099.199999999999 L 99.99999999999999 7099.199999999999"
                                                                        fill-rule="evenodd"></path>
                                                                    <g id="SvgjsG2869"
                                                                        class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown"
                                                                        data:realIndex="0">
                                                                        <g class="apexcharts-series-markers">
                                                                            <circle id="SvgjsCircle2901" r="0"
                                                                                cx="0" cy="0"
                                                                                class="apexcharts-marker wnlm4e5hq no-pointer-events"
                                                                                stroke="#ffffff" fill="#ffffff"
                                                                                fill-opacity="1" stroke-width="2"
                                                                                stroke-opacity="0.9"
                                                                                default-marker-size="0"></circle>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                                <g id="SvgjsG2870" class="apexcharts-datalabels"
                                                                    data:realIndex="0"></g>
                                                            </g>
                                                            <line id="SvgjsLine2885" x1="0" y1="0"
                                                                x2="100" y2="0" stroke="#b6b6b6"
                                                                stroke-dasharray="0" stroke-width="1"
                                                                stroke-linecap="butt"
                                                                class="apexcharts-ycrosshairs"></line>
                                                            <line id="SvgjsLine2886" x1="0" y1="0"
                                                                x2="100" y2="0" stroke-dasharray="0"
                                                                stroke-width="0" stroke-linecap="butt"
                                                                class="apexcharts-ycrosshairs-hidden"></line>
                                                            <g id="SvgjsG2887" class="apexcharts-xaxis"
                                                                transform="translate(0, 0)">
                                                                <g id="SvgjsG2888" class="apexcharts-xaxis-texts-g"
                                                                    transform="translate(0, -4)"></g>
                                                            </g>
                                                            <g id="SvgjsG2898"
                                                                class="apexcharts-yaxis-annotations apexcharts-hidden-element-shown">
                                                            </g>
                                                            <g id="SvgjsG2899"
                                                                class="apexcharts-xaxis-annotations apexcharts-hidden-element-shown">
                                                            </g>
                                                            <g id="SvgjsG2900"
                                                                class="apexcharts-point-annotations apexcharts-hidden-element-shown">
                                                            </g>
                                                        </g>
                                                    </svg>
                                                    <div class="apexcharts-tooltip apexcharts-theme-light">
                                                        <div class="apexcharts-tooltip-series-group"
                                                            style="order: 1;"><span
                                                                class="apexcharts-tooltip-marker"
                                                                style="background-color: rgb(255, 255, 255);"></span>
                                                            <div class="apexcharts-tooltip-text"
                                                                style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                                <div class="apexcharts-tooltip-y-group"><span
                                                                        class="apexcharts-tooltip-text-y-label"></span><span
                                                                        class="apexcharts-tooltip-text-y-value"></span>
                                                                </div>
                                                                <div class="apexcharts-tooltip-goals-group"><span
                                                                        class="apexcharts-tooltip-text-goals-label"></span><span
                                                                        class="apexcharts-tooltip-text-goals-value"></span>
                                                                </div>
                                                                <div class="apexcharts-tooltip-z-group"><span
                                                                        class="apexcharts-tooltip-text-z-label"></span><span
                                                                        class="apexcharts-tooltip-text-z-value"></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                                        <div class="apexcharts-yaxistooltip-text"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-link col-lg-3 col-md-3 col-sm-12 price-item price-up"
                                    data-komoditas-id="37"
                                    style="--bg-img: url('https://panelharga.badanpangan.go.id/src/assets/img/komoditas-ikon/gula-konsumsi.png');"
                                    onclick="checkDetails(this)">
                                    <div
                                        style="display:flex;flex-direction:column;justify-content:space-between;align-items:flex-start;height:100%;">
                                        <span class="price-item-title">Gula Konsumsi</span>
                                        <div
                                            style="display:flex;justify-content:space-between;align-items:flex-end;width:100%;">
                                            <div style="margin-right:12px;font-size:13px;">
                                                <span class="price-item-price"
                                                    style="background-color:transparent;">
                                                    Rp 18.360
                                                </span>
                                                <span class="price-item-per">Rp./Kg</span>
                                                <span class="price-item-increment"
                                                    style="background-color:#008000;padding:0px 5px;border-radius:5px;">
                                                    <i class="fa-solid fa-arrow-down" style="margin-right: 4px"></i>
                                                    -0.22% - Rp -40
                                                </span>
                                            </div>
                                            <div class="chart" id="chart-37" style="min-height: 60px;">
                                                <div id="apexchartskmkjjg4l"
                                                    class="apexcharts-canvas apexchartskmkjjg4l apexcharts-theme-light"
                                                    style="width: 100px; height: 60px;"><svg id="SvgjsSvg2902"
                                                        width="100" height="60"
                                                        xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                                        xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg"
                                                        xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                                        style="background: transparent;">
                                                        <foreignObject x="0" y="0" width="100" height="60">
                                                            <div class="apexcharts-legend"
                                                                xmlns="http://www.w3.org/1999/xhtml"
                                                                style="max-height: 30px;"></div>
                                                        </foreignObject>
                                                        <rect id="SvgjsRect2906" width="0" height="0"
                                                            x="0" y="0" rx="0" ry="0"
                                                            opacity="1" stroke-width="0" stroke="none"
                                                            stroke-dasharray="0" fill="#fefefe"></rect>
                                                        <g id="SvgjsG2940" class="apexcharts-yaxis" rel="0"
                                                            transform="translate(-18, 0)"></g>
                                                        <g id="SvgjsG2904"
                                                            class="apexcharts-inner apexcharts-graphical"
                                                            transform="translate(0, 1)">
                                                            <defs id="SvgjsDefs2903">
                                                                <clipPath id="gridRectMaskkmkjjg4l">
                                                                    <rect id="SvgjsRect2908" width="106"
                                                                        height="64" x="-3" y="-3" rx="0"
                                                                        ry="0" opacity="1"
                                                                        stroke-width="0" stroke="none"
                                                                        stroke-dasharray="0" fill="#fff"></rect>
                                                                </clipPath>
                                                                <clipPath id="forecastMaskkmkjjg4l"></clipPath>
                                                                <clipPath id="nonForecastMaskkmkjjg4l"></clipPath>
                                                                <clipPath id="gridRectMarkerMaskkmkjjg4l">
                                                                    <rect id="SvgjsRect2909" width="104"
                                                                        height="62" x="-2" y="-2" rx="0"
                                                                        ry="0" opacity="1"
                                                                        stroke-width="0" stroke="none"
                                                                        stroke-dasharray="0" fill="#fff"></rect>
                                                                </clipPath>
                                                                <linearGradient id="SvgjsLinearGradient2914"
                                                                    x1="0" y1="0" x2="0"
                                                                    y2="1">
                                                                    <stop id="SvgjsStop2915" stop-opacity="0.65"
                                                                        stop-color="rgba(255,255,255,0.65)"
                                                                        offset="0"></stop>
                                                                    <stop id="SvgjsStop2916" stop-opacity="0.5"
                                                                        stop-color="rgba(128,135,255,0.5)"
                                                                        offset="1"></stop>
                                                                    <stop id="SvgjsStop2917" stop-opacity="0.5"
                                                                        stop-color="rgba(128,135,255,0.5)"
                                                                        offset="1"></stop>
                                                                </linearGradient>
                                                            </defs>
                                                            <line id="SvgjsLine2907" x1="0" y1="0"
                                                                x2="0" y2="58" stroke="#b6b6b6"
                                                                stroke-dasharray="3" stroke-linecap="butt"
                                                                class="apexcharts-xcrosshairs" x="0" y="0"
                                                                width="1" height="58" fill="#b1b9c4"
                                                                filter="none" fill-opacity="0.9"
                                                                stroke-width="1"></line>
                                                            <g id="SvgjsG2920" class="apexcharts-grid">
                                                                <g id="SvgjsG2921"
                                                                    class="apexcharts-gridlines-horizontal"
                                                                    style="display: none;">
                                                                    <line id="SvgjsLine2924" x1="0"
                                                                        y1="0" x2="100"
                                                                        y2="0" stroke="#e0e0e0"
                                                                        stroke-dasharray="0" stroke-linecap="butt"
                                                                        class="apexcharts-gridline"></line>
                                                                    <line id="SvgjsLine2925" x1="0"
                                                                        y1="58" x2="100"
                                                                        y2="58" stroke="#e0e0e0"
                                                                        stroke-dasharray="0" stroke-linecap="butt"
                                                                        class="apexcharts-gridline"></line>
                                                                </g>
                                                                <g id="SvgjsG2922"
                                                                    class="apexcharts-gridlines-vertical"
                                                                    style="display: none;"></g>
                                                                <line id="SvgjsLine2927" x1="0"
                                                                    y1="58" x2="100" y2="58"
                                                                    stroke="transparent" stroke-dasharray="0"
                                                                    stroke-linecap="butt"></line>
                                                                <line id="SvgjsLine2926" x1="0"
                                                                    y1="1" x2="0" y2="58"
                                                                    stroke="transparent" stroke-dasharray="0"
                                                                    stroke-linecap="butt"></line>
                                                            </g>
                                                            <g id="SvgjsG2923" class="apexcharts-grid-borders"
                                                                style="display: none;"></g>
                                                            <g id="SvgjsG2910"
                                                                class="apexcharts-area-series apexcharts-plot-series">
                                                                <g id="SvgjsG2911" class="apexcharts-series"
                                                                    zIndex="0" seriesName="series-1"
                                                                    data:longestSeries="true" rel="1"
                                                                    data:realIndex="0">
                                                                    <path id="SvgjsPath2918"
                                                                        d="M0 58C4.999999999999999 58 9.285714285714285 8.285714285713766 14.285714285714285 8.285714285713766C19.285714285714285 8.285714285713766 23.57142857142857 0 28.57142857142857 0C33.57142857142857 0 37.857142857142854 24.857142857143117 42.857142857142854 24.857142857143117C47.857142857142854 24.857142857143117 52.14285714285714 33.14285714285688 57.14285714285714 33.14285714285688C62.14285714285714 33.14285714285688 66.42857142857142 0 71.42857142857142 0C76.42857142857142 0 80.71428571428571 8.285714285713766 85.71428571428571 8.285714285713766C90.71428571428571 8.285714285713766 94.99999999999999 41.42857142857065 99.99999999999999 41.42857142857065C99.99999999999999 41.42857142857065 99.99999999999999 41.42857142857065 99.99999999999999 58L0 58C0 58 0 58 0 58 "
                                                                        fill="url(#SvgjsLinearGradient2914)"
                                                                        fill-opacity="1" stroke-opacity="1"
                                                                        stroke-linecap="butt" stroke-width="0"
                                                                        stroke-dasharray="0" class="apexcharts-area"
                                                                        index="0"
                                                                        clip-path="url(#gridRectMaskkmkjjg4l)"
                                                                        pathTo="M 0 58C 4.999999999999999 58 9.285714285714285 8.285714285713766 14.285714285714285 8.285714285713766C 19.285714285714285 8.285714285713766 23.57142857142857 0 28.57142857142857 0C 33.57142857142857 0 37.857142857142854 24.857142857143117 42.857142857142854 24.857142857143117C 47.857142857142854 24.857142857143117 52.14285714285714 33.14285714285688 57.14285714285714 33.14285714285688C 62.14285714285714 33.14285714285688 66.42857142857142 0 71.42857142857142 0C 76.42857142857142 0 80.71428571428571 8.285714285713766 85.71428571428571 8.285714285713766C 90.71428571428571 8.285714285713766 94.99999999999999 41.42857142857065 99.99999999999999 41.42857142857065C 99.99999999999999 41.42857142857065 99.99999999999999 41.42857142857065 99.99999999999999 58 L 0 58z"
                                                                        pathFrom="M 0 15254 L 0 15254 L 14.285714285714285 15254 L 28.57142857142857 15254 L 42.857142857142854 15254 L 57.14285714285714 15254 L 71.42857142857142 15254 L 85.71428571428571 15254 L 99.99999999999999 15254 L 0 15254">
                                                                    </path>
                                                                    <path id="SvgjsPath2919"
                                                                        d="M0 58C4.999999999999999 58 9.285714285714285 8.285714285713766 14.285714285714285 8.285714285713766C19.285714285714285 8.285714285713766 23.57142857142857 0 28.57142857142857 0C33.57142857142857 0 37.857142857142854 24.857142857143117 42.857142857142854 24.857142857143117C47.857142857142854 24.857142857143117 52.14285714285714 33.14285714285688 57.14285714285714 33.14285714285688C62.14285714285714 33.14285714285688 66.42857142857142 0 71.42857142857142 0C76.42857142857142 0 80.71428571428571 8.285714285713766 85.71428571428571 8.285714285713766C90.71428571428571 8.285714285713766 94.99999999999999 41.42857142857065 99.99999999999999 41.42857142857065C99.99999999999999 41.42857142857065 99.99999999999999 41.42857142857065 99.99999999999999 41.42857142857065 "
                                                                        fill="none" fill-opacity="1"
                                                                        stroke="#ffffff" stroke-opacity="1"
                                                                        stroke-linecap="butt" stroke-width="2"
                                                                        stroke-dasharray="0" class="apexcharts-area"
                                                                        index="0"
                                                                        clip-path="url(#gridRectMaskkmkjjg4l)"
                                                                        pathTo="M 0 58C 4.999999999999999 58 9.285714285714285 8.285714285713766 14.285714285714285 8.285714285713766C 19.285714285714285 8.285714285713766 23.57142857142857 0 28.57142857142857 0C 33.57142857142857 0 37.857142857142854 24.857142857143117 42.857142857142854 24.857142857143117C 47.857142857142854 24.857142857143117 52.14285714285714 33.14285714285688 57.14285714285714 33.14285714285688C 62.14285714285714 33.14285714285688 66.42857142857142 0 71.42857142857142 0C 76.42857142857142 0 80.71428571428571 8.285714285713766 85.71428571428571 8.285714285713766C 90.71428571428571 8.285714285713766 94.99999999999999 41.42857142857065 99.99999999999999 41.42857142857065"
                                                                        pathFrom="M 0 15254 L 0 15254 L 14.285714285714285 15254 L 28.57142857142857 15254 L 42.857142857142854 15254 L 57.14285714285714 15254 L 71.42857142857142 15254 L 85.71428571428571 15254 L 99.99999999999999 15254"
                                                                        fill-rule="evenodd"></path>
                                                                    <g id="SvgjsG2912"
                                                                        class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown"
                                                                        data:realIndex="0">
                                                                        <g class="apexcharts-series-markers">
                                                                            <circle id="SvgjsCircle2944" r="0"
                                                                                cx="0" cy="0"
                                                                                class="apexcharts-marker wanbgel9c no-pointer-events"
                                                                                stroke="#ffffff" fill="#ffffff"
                                                                                fill-opacity="1" stroke-width="2"
                                                                                stroke-opacity="0.9"
                                                                                default-marker-size="0"></circle>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                                <g id="SvgjsG2913" class="apexcharts-datalabels"
                                                                    data:realIndex="0"></g>
                                                            </g>
                                                            <line id="SvgjsLine2928" x1="0" y1="0"
                                                                x2="100" y2="0" stroke="#b6b6b6"
                                                                stroke-dasharray="0" stroke-width="1"
                                                                stroke-linecap="butt"
                                                                class="apexcharts-ycrosshairs"></line>
                                                            <line id="SvgjsLine2929" x1="0" y1="0"
                                                                x2="100" y2="0" stroke-dasharray="0"
                                                                stroke-width="0" stroke-linecap="butt"
                                                                class="apexcharts-ycrosshairs-hidden"></line>
                                                            <g id="SvgjsG2930" class="apexcharts-xaxis"
                                                                transform="translate(0, 0)">
                                                                <g id="SvgjsG2931" class="apexcharts-xaxis-texts-g"
                                                                    transform="translate(0, -4)"></g>
                                                            </g>
                                                            <g id="SvgjsG2941"
                                                                class="apexcharts-yaxis-annotations apexcharts-hidden-element-shown">
                                                            </g>
                                                            <g id="SvgjsG2942"
                                                                class="apexcharts-xaxis-annotations apexcharts-hidden-element-shown">
                                                            </g>
                                                            <g id="SvgjsG2943"
                                                                class="apexcharts-point-annotations apexcharts-hidden-element-shown">
                                                            </g>
                                                        </g>
                                                    </svg>
                                                    <div class="apexcharts-tooltip apexcharts-theme-light">
                                                        <div class="apexcharts-tooltip-series-group"
                                                            style="order: 1;"><span
                                                                class="apexcharts-tooltip-marker"
                                                                style="background-color: rgb(255, 255, 255);"></span>
                                                            <div class="apexcharts-tooltip-text"
                                                                style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                                <div class="apexcharts-tooltip-y-group"><span
                                                                        class="apexcharts-tooltip-text-y-label"></span><span
                                                                        class="apexcharts-tooltip-text-y-value"></span>
                                                                </div>
                                                                <div class="apexcharts-tooltip-goals-group"><span
                                                                        class="apexcharts-tooltip-text-goals-label"></span><span
                                                                        class="apexcharts-tooltip-text-goals-value"></span>
                                                                </div>
                                                                <div class="apexcharts-tooltip-z-group"><span
                                                                        class="apexcharts-tooltip-text-z-label"></span><span
                                                                        class="apexcharts-tooltip-text-z-value"></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                                        <div class="apexcharts-yaxistooltip-text"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-link col-lg-3 col-md-3 col-sm-12 price-item price-up"
                                    data-komoditas-id="38"
                                    style="--bg-img: url('https://panelharga.badanpangan.go.id/src/assets/img/komoditas-ikon/minyak-goreng-kemasan-sederhana.png');"
                                    onclick="checkDetails(this)">
                                    <div
                                        style="display:flex;flex-direction:column;justify-content:space-between;align-items:flex-start;height:100%;">
                                        <span class="price-item-title">Minyak Goreng Kemasan Sederhana</span>
                                        <div
                                            style="display:flex;justify-content:space-between;align-items:flex-end;width:100%;">
                                            <div style="margin-right:12px;font-size:13px;">
                                                <span class="price-item-price"
                                                    style="background-color:transparent;">
                                                    Rp 17.820
                                                </span>
                                                <span class="price-item-per">Rp./Liter</span>
                                                <span class="price-item-increment"
                                                    style="background-color:#008000;padding:0px 5px;border-radius:5px;">
                                                    <i class="fa-solid fa-arrow-down" style="margin-right: 4px"></i>
                                                    -0.06% - Rp -10
                                                </span>
                                            </div>
                                            <div class="chart" id="chart-38" style="min-height: 60px;">
                                                <div id="apexchartsn9xlq9f1"
                                                    class="apexcharts-canvas apexchartsn9xlq9f1 apexcharts-theme-light"
                                                    style="width: 100px; height: 60px;"><svg id="SvgjsSvg2945"
                                                        width="100" height="60"
                                                        xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                                        xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg"
                                                        xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                                        style="background: transparent;">
                                                        <foreignObject x="0" y="0" width="100" height="60">
                                                            <div class="apexcharts-legend"
                                                                xmlns="http://www.w3.org/1999/xhtml"
                                                                style="max-height: 30px;"></div>
                                                        </foreignObject>
                                                        <rect id="SvgjsRect2949" width="0" height="0"
                                                            x="0" y="0" rx="0" ry="0"
                                                            opacity="1" stroke-width="0" stroke="none"
                                                            stroke-dasharray="0" fill="#fefefe"></rect>
                                                        <g id="SvgjsG2983" class="apexcharts-yaxis" rel="0"
                                                            transform="translate(-18, 0)"></g>
                                                        <g id="SvgjsG2947"
                                                            class="apexcharts-inner apexcharts-graphical"
                                                            transform="translate(0, 1)">
                                                            <defs id="SvgjsDefs2946">
                                                                <clipPath id="gridRectMaskn9xlq9f1">
                                                                    <rect id="SvgjsRect2951" width="106"
                                                                        height="64" x="-3" y="-3" rx="0"
                                                                        ry="0" opacity="1"
                                                                        stroke-width="0" stroke="none"
                                                                        stroke-dasharray="0" fill="#fff"></rect>
                                                                </clipPath>
                                                                <clipPath id="forecastMaskn9xlq9f1"></clipPath>
                                                                <clipPath id="nonForecastMaskn9xlq9f1"></clipPath>
                                                                <clipPath id="gridRectMarkerMaskn9xlq9f1">
                                                                    <rect id="SvgjsRect2952" width="104"
                                                                        height="62" x="-2" y="-2" rx="0"
                                                                        ry="0" opacity="1"
                                                                        stroke-width="0" stroke="none"
                                                                        stroke-dasharray="0" fill="#fff"></rect>
                                                                </clipPath>
                                                                <linearGradient id="SvgjsLinearGradient2957"
                                                                    x1="0" y1="0" x2="0"
                                                                    y2="1">
                                                                    <stop id="SvgjsStop2958" stop-opacity="0.65"
                                                                        stop-color="rgba(255,255,255,0.65)"
                                                                        offset="0"></stop>
                                                                    <stop id="SvgjsStop2959" stop-opacity="0.5"
                                                                        stop-color="rgba(128,135,255,0.5)"
                                                                        offset="1"></stop>
                                                                    <stop id="SvgjsStop2960" stop-opacity="0.5"
                                                                        stop-color="rgba(128,135,255,0.5)"
                                                                        offset="1"></stop>
                                                                </linearGradient>
                                                            </defs>
                                                            <line id="SvgjsLine2950" x1="0" y1="0"
                                                                x2="0" y2="58" stroke="#b6b6b6"
                                                                stroke-dasharray="3" stroke-linecap="butt"
                                                                class="apexcharts-xcrosshairs" x="0" y="0"
                                                                width="1" height="58" fill="#b1b9c4"
                                                                filter="none" fill-opacity="0.9"
                                                                stroke-width="1"></line>
                                                            <g id="SvgjsG2963" class="apexcharts-grid">
                                                                <g id="SvgjsG2964"
                                                                    class="apexcharts-gridlines-horizontal"
                                                                    style="display: none;">
                                                                    <line id="SvgjsLine2967" x1="0"
                                                                        y1="0" x2="100"
                                                                        y2="0" stroke="#e0e0e0"
                                                                        stroke-dasharray="0" stroke-linecap="butt"
                                                                        class="apexcharts-gridline"></line>
                                                                    <line id="SvgjsLine2968" x1="0"
                                                                        y1="58" x2="100"
                                                                        y2="58" stroke="#e0e0e0"
                                                                        stroke-dasharray="0" stroke-linecap="butt"
                                                                        class="apexcharts-gridline"></line>
                                                                </g>
                                                                <g id="SvgjsG2965"
                                                                    class="apexcharts-gridlines-vertical"
                                                                    style="display: none;"></g>
                                                                <line id="SvgjsLine2970" x1="0"
                                                                    y1="58" x2="100" y2="58"
                                                                    stroke="transparent" stroke-dasharray="0"
                                                                    stroke-linecap="butt"></line>
                                                                <line id="SvgjsLine2969" x1="0"
                                                                    y1="1" x2="0" y2="58"
                                                                    stroke="transparent" stroke-dasharray="0"
                                                                    stroke-linecap="butt"></line>
                                                            </g>
                                                            <g id="SvgjsG2966" class="apexcharts-grid-borders"
                                                                style="display: none;"></g>
                                                            <g id="SvgjsG2953"
                                                                class="apexcharts-area-series apexcharts-plot-series">
                                                                <g id="SvgjsG2954" class="apexcharts-series"
                                                                    zIndex="0" seriesName="series-1"
                                                                    data:longestSeries="true" rel="1"
                                                                    data:realIndex="0">
                                                                    <path id="SvgjsPath2961"
                                                                        d="M0 58C4.999999999999999 58 9.285714285714285 5.799999999999272 14.285714285714285 5.799999999999272C19.285714285714285 5.799999999999272 23.57142857142857 0 28.57142857142857 0C33.57142857142857 0 37.857142857142854 11.600000000000364 42.857142857142854 11.600000000000364C47.857142857142854 11.600000000000364 52.14285714285714 34.79999999999927 57.14285714285714 34.79999999999927C62.14285714285714 34.79999999999927 66.42857142857142 17.399999999999636 71.42857142857142 17.399999999999636C76.42857142857142 17.399999999999636 80.71428571428571 34.79999999999927 85.71428571428571 34.79999999999927C90.71428571428571 34.79999999999927 94.99999999999999 40.600000000000364 99.99999999999999 40.600000000000364C99.99999999999999 40.600000000000364 99.99999999999999 40.600000000000364 99.99999999999999 58L0 58C0 58 0 58 0 58 "
                                                                        fill="url(#SvgjsLinearGradient2957)"
                                                                        fill-opacity="1" stroke-opacity="1"
                                                                        stroke-linecap="butt" stroke-width="0"
                                                                        stroke-dasharray="0" class="apexcharts-area"
                                                                        index="0"
                                                                        clip-path="url(#gridRectMaskn9xlq9f1)"
                                                                        pathTo="M 0 58C 4.999999999999999 58 9.285714285714285 5.799999999999272 14.285714285714285 5.799999999999272C 19.285714285714285 5.799999999999272 23.57142857142857 0 28.57142857142857 0C 33.57142857142857 0 37.857142857142854 11.600000000000364 42.857142857142854 11.600000000000364C 47.857142857142854 11.600000000000364 52.14285714285714 34.79999999999927 57.14285714285714 34.79999999999927C 62.14285714285714 34.79999999999927 66.42857142857142 17.399999999999636 71.42857142857142 17.399999999999636C 76.42857142857142 17.399999999999636 80.71428571428571 34.79999999999927 85.71428571428571 34.79999999999927C 90.71428571428571 34.79999999999927 94.99999999999999 40.600000000000364 99.99999999999999 40.600000000000364C 99.99999999999999 40.600000000000364 99.99999999999999 40.600000000000364 99.99999999999999 58 L 0 58z"
                                                                        pathFrom="M 0 10376.2 L 0 10376.2 L 14.285714285714285 10376.2 L 28.57142857142857 10376.2 L 42.857142857142854 10376.2 L 57.14285714285714 10376.2 L 71.42857142857142 10376.2 L 85.71428571428571 10376.2 L 99.99999999999999 10376.2 L 0 10376.2">
                                                                    </path>
                                                                    <path id="SvgjsPath2962"
                                                                        d="M0 58C4.999999999999999 58 9.285714285714285 5.799999999999272 14.285714285714285 5.799999999999272C19.285714285714285 5.799999999999272 23.57142857142857 0 28.57142857142857 0C33.57142857142857 0 37.857142857142854 11.600000000000364 42.857142857142854 11.600000000000364C47.857142857142854 11.600000000000364 52.14285714285714 34.79999999999927 57.14285714285714 34.79999999999927C62.14285714285714 34.79999999999927 66.42857142857142 17.399999999999636 71.42857142857142 17.399999999999636C76.42857142857142 17.399999999999636 80.71428571428571 34.79999999999927 85.71428571428571 34.79999999999927C90.71428571428571 34.79999999999927 94.99999999999999 40.600000000000364 99.99999999999999 40.600000000000364C99.99999999999999 40.600000000000364 99.99999999999999 40.600000000000364 99.99999999999999 40.600000000000364 "
                                                                        fill="none" fill-opacity="1"
                                                                        stroke="#ffffff" stroke-opacity="1"
                                                                        stroke-linecap="butt" stroke-width="2"
                                                                        stroke-dasharray="0" class="apexcharts-area"
                                                                        index="0"
                                                                        clip-path="url(#gridRectMaskn9xlq9f1)"
                                                                        pathTo="M 0 58C 4.999999999999999 58 9.285714285714285 5.799999999999272 14.285714285714285 5.799999999999272C 19.285714285714285 5.799999999999272 23.57142857142857 0 28.57142857142857 0C 33.57142857142857 0 37.857142857142854 11.600000000000364 42.857142857142854 11.600000000000364C 47.857142857142854 11.600000000000364 52.14285714285714 34.79999999999927 57.14285714285714 34.79999999999927C 62.14285714285714 34.79999999999927 66.42857142857142 17.399999999999636 71.42857142857142 17.399999999999636C 76.42857142857142 17.399999999999636 80.71428571428571 34.79999999999927 85.71428571428571 34.79999999999927C 90.71428571428571 34.79999999999927 94.99999999999999 40.600000000000364 99.99999999999999 40.600000000000364"
                                                                        pathFrom="M 0 10376.2 L 0 10376.2 L 14.285714285714285 10376.2 L 28.57142857142857 10376.2 L 42.857142857142854 10376.2 L 57.14285714285714 10376.2 L 71.42857142857142 10376.2 L 85.71428571428571 10376.2 L 99.99999999999999 10376.2"
                                                                        fill-rule="evenodd"></path>
                                                                    <g id="SvgjsG2955"
                                                                        class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown"
                                                                        data:realIndex="0">
                                                                        <g class="apexcharts-series-markers">
                                                                            <circle id="SvgjsCircle2987" r="0"
                                                                                cx="0" cy="0"
                                                                                class="apexcharts-marker wly8jgwgh no-pointer-events"
                                                                                stroke="#ffffff" fill="#ffffff"
                                                                                fill-opacity="1" stroke-width="2"
                                                                                stroke-opacity="0.9"
                                                                                default-marker-size="0"></circle>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                                <g id="SvgjsG2956" class="apexcharts-datalabels"
                                                                    data:realIndex="0"></g>
                                                            </g>
                                                            <line id="SvgjsLine2971" x1="0" y1="0"
                                                                x2="100" y2="0" stroke="#b6b6b6"
                                                                stroke-dasharray="0" stroke-width="1"
                                                                stroke-linecap="butt"
                                                                class="apexcharts-ycrosshairs"></line>
                                                            <line id="SvgjsLine2972" x1="0" y1="0"
                                                                x2="100" y2="0" stroke-dasharray="0"
                                                                stroke-width="0" stroke-linecap="butt"
                                                                class="apexcharts-ycrosshairs-hidden"></line>
                                                            <g id="SvgjsG2973" class="apexcharts-xaxis"
                                                                transform="translate(0, 0)">
                                                                <g id="SvgjsG2974" class="apexcharts-xaxis-texts-g"
                                                                    transform="translate(0, -4)"></g>
                                                            </g>
                                                            <g id="SvgjsG2984"
                                                                class="apexcharts-yaxis-annotations apexcharts-hidden-element-shown">
                                                            </g>
                                                            <g id="SvgjsG2985"
                                                                class="apexcharts-xaxis-annotations apexcharts-hidden-element-shown">
                                                            </g>
                                                            <g id="SvgjsG2986"
                                                                class="apexcharts-point-annotations apexcharts-hidden-element-shown">
                                                            </g>
                                                        </g>
                                                    </svg>
                                                    <div class="apexcharts-tooltip apexcharts-theme-light">
                                                        <div class="apexcharts-tooltip-series-group"
                                                            style="order: 1;"><span
                                                                class="apexcharts-tooltip-marker"
                                                                style="background-color: rgb(255, 255, 255);"></span>
                                                            <div class="apexcharts-tooltip-text"
                                                                style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                                <div class="apexcharts-tooltip-y-group"><span
                                                                        class="apexcharts-tooltip-text-y-label"></span><span
                                                                        class="apexcharts-tooltip-text-y-value"></span>
                                                                </div>
                                                                <div class="apexcharts-tooltip-goals-group"><span
                                                                        class="apexcharts-tooltip-text-goals-label"></span><span
                                                                        class="apexcharts-tooltip-text-goals-value"></span>
                                                                </div>
                                                                <div class="apexcharts-tooltip-z-group"><span
                                                                        class="apexcharts-tooltip-text-z-label"></span><span
                                                                        class="apexcharts-tooltip-text-z-value"></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                                        <div class="apexcharts-yaxistooltip-text"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-link col-lg-3 col-md-3 col-sm-12 price-item price-up"
                                    data-komoditas-id="40"
                                    style="--bg-img: url('https://panelharga.badanpangan.go.id/src/assets/img/komoditas-ikon/tepung-terigu-curah.png');"
                                    onclick="checkDetails(this)">
                                    <div
                                        style="display:flex;flex-direction:column;justify-content:space-between;align-items:flex-start;height:100%;">
                                        <span class="price-item-title">Tepung Terigu (Curah)</span>
                                        <div
                                            style="display:flex;justify-content:space-between;align-items:flex-end;width:100%;">
                                            <div style="margin-right:12px;font-size:13px;">
                                                <span class="price-item-price"
                                                    style="background-color:transparent;">
                                                    Rp 10.370
                                                </span>
                                                <span class="price-item-per">Rp./Kg</span>
                                                <span class="price-item-increment"
                                                    style="background-color:#008000;padding:0px 5px;border-radius:5px;">
                                                    <i class="fa-solid fa-arrow-down" style="margin-right: 4px"></i>
                                                    -0.10% - Rp -10
                                                </span>
                                            </div>
                                            <div class="chart" id="chart-40" style="min-height: 60px;">
                                                <div id="apexcharts3wdj2ilz"
                                                    class="apexcharts-canvas apexcharts3wdj2ilz apexcharts-theme-light"
                                                    style="width: 100px; height: 60px;"><svg id="SvgjsSvg2988"
                                                        width="100" height="60"
                                                        xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                                        xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg"
                                                        xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                                        style="background: transparent;">
                                                        <foreignObject x="0" y="0" width="100" height="60">
                                                            <div class="apexcharts-legend"
                                                                xmlns="http://www.w3.org/1999/xhtml"
                                                                style="max-height: 30px;"></div>
                                                        </foreignObject>
                                                        <rect id="SvgjsRect2992" width="0" height="0"
                                                            x="0" y="0" rx="0" ry="0"
                                                            opacity="1" stroke-width="0" stroke="none"
                                                            stroke-dasharray="0" fill="#fefefe"></rect>
                                                        <g id="SvgjsG3026" class="apexcharts-yaxis" rel="0"
                                                            transform="translate(-18, 0)"></g>
                                                        <g id="SvgjsG2990"
                                                            class="apexcharts-inner apexcharts-graphical"
                                                            transform="translate(0, 1)">
                                                            <defs id="SvgjsDefs2989">
                                                                <clipPath id="gridRectMask3wdj2ilz">
                                                                    <rect id="SvgjsRect2994" width="106"
                                                                        height="64" x="-3" y="-3" rx="0"
                                                                        ry="0" opacity="1"
                                                                        stroke-width="0" stroke="none"
                                                                        stroke-dasharray="0" fill="#fff"></rect>
                                                                </clipPath>
                                                                <clipPath id="forecastMask3wdj2ilz"></clipPath>
                                                                <clipPath id="nonForecastMask3wdj2ilz"></clipPath>
                                                                <clipPath id="gridRectMarkerMask3wdj2ilz">
                                                                    <rect id="SvgjsRect2995" width="104"
                                                                        height="62" x="-2" y="-2" rx="0"
                                                                        ry="0" opacity="1"
                                                                        stroke-width="0" stroke="none"
                                                                        stroke-dasharray="0" fill="#fff"></rect>
                                                                </clipPath>
                                                                <linearGradient id="SvgjsLinearGradient3000"
                                                                    x1="0" y1="0" x2="0"
                                                                    y2="1">
                                                                    <stop id="SvgjsStop3001" stop-opacity="0.65"
                                                                        stop-color="rgba(255,255,255,0.65)"
                                                                        offset="0"></stop>
                                                                    <stop id="SvgjsStop3002" stop-opacity="0.5"
                                                                        stop-color="rgba(128,135,255,0.5)"
                                                                        offset="1"></stop>
                                                                    <stop id="SvgjsStop3003" stop-opacity="0.5"
                                                                        stop-color="rgba(128,135,255,0.5)"
                                                                        offset="1"></stop>
                                                                </linearGradient>
                                                            </defs>
                                                            <line id="SvgjsLine2993" x1="0" y1="0"
                                                                x2="0" y2="58" stroke="#b6b6b6"
                                                                stroke-dasharray="3" stroke-linecap="butt"
                                                                class="apexcharts-xcrosshairs" x="0" y="0"
                                                                width="1" height="58" fill="#b1b9c4"
                                                                filter="none" fill-opacity="0.9"
                                                                stroke-width="1"></line>
                                                            <g id="SvgjsG3006" class="apexcharts-grid">
                                                                <g id="SvgjsG3007"
                                                                    class="apexcharts-gridlines-horizontal"
                                                                    style="display: none;">
                                                                    <line id="SvgjsLine3010" x1="0"
                                                                        y1="0" x2="100"
                                                                        y2="0" stroke="#e0e0e0"
                                                                        stroke-dasharray="0" stroke-linecap="butt"
                                                                        class="apexcharts-gridline"></line>
                                                                    <line id="SvgjsLine3011" x1="0"
                                                                        y1="58" x2="100"
                                                                        y2="58" stroke="#e0e0e0"
                                                                        stroke-dasharray="0" stroke-linecap="butt"
                                                                        class="apexcharts-gridline"></line>
                                                                </g>
                                                                <g id="SvgjsG3008"
                                                                    class="apexcharts-gridlines-vertical"
                                                                    style="display: none;"></g>
                                                                <line id="SvgjsLine3013" x1="0"
                                                                    y1="58" x2="100" y2="58"
                                                                    stroke="transparent" stroke-dasharray="0"
                                                                    stroke-linecap="butt"></line>
                                                                <line id="SvgjsLine3012" x1="0"
                                                                    y1="1" x2="0" y2="58"
                                                                    stroke="transparent" stroke-dasharray="0"
                                                                    stroke-linecap="butt"></line>
                                                            </g>
                                                            <g id="SvgjsG3009" class="apexcharts-grid-borders"
                                                                style="display: none;"></g>
                                                            <g id="SvgjsG2996"
                                                                class="apexcharts-area-series apexcharts-plot-series">
                                                                <g id="SvgjsG2997" class="apexcharts-series"
                                                                    zIndex="0" seriesName="series-1"
                                                                    data:longestSeries="true" rel="1"
                                                                    data:realIndex="0">
                                                                    <path id="SvgjsPath3004"
                                                                        d="M0 19.33333333333212C4.999999999999999 19.33333333333212 9.285714285714285 0 14.285714285714285 0C19.285714285714285 0 23.57142857142857 9.66666666666606 28.57142857142857 9.66666666666606C33.57142857142857 9.66666666666606 37.857142857142854 29 42.857142857142854 29C47.857142857142854 29 52.14285714285714 19.33333333333212 57.14285714285714 19.33333333333212C62.14285714285714 19.33333333333212 66.42857142857142 29 71.42857142857142 29C76.42857142857142 29 80.71428571428571 48.33333333333212 85.71428571428571 48.33333333333212C90.71428571428571 48.33333333333212 94.99999999999999 58 99.99999999999999 58C99.99999999999999 58 99.99999999999999 58 99.99999999999999 58L0 58C0 58 0 19.33333333333212 0 19.33333333333212 "
                                                                        fill="url(#SvgjsLinearGradient3000)"
                                                                        fill-opacity="1" stroke-opacity="1"
                                                                        stroke-linecap="butt" stroke-width="0"
                                                                        stroke-dasharray="0" class="apexcharts-area"
                                                                        index="0"
                                                                        clip-path="url(#gridRectMask3wdj2ilz)"
                                                                        pathTo="M 0 19.33333333333212C 4.999999999999999 19.33333333333212 9.285714285714285 0 14.285714285714285 0C 19.285714285714285 0 23.57142857142857 9.66666666666606 28.57142857142857 9.66666666666606C 33.57142857142857 9.66666666666606 37.857142857142854 29 42.857142857142854 29C 47.857142857142854 29 52.14285714285714 19.33333333333212 57.14285714285714 19.33333333333212C 62.14285714285714 19.33333333333212 66.42857142857142 29 71.42857142857142 29C 76.42857142857142 29 80.71428571428571 48.33333333333212 85.71428571428571 48.33333333333212C 90.71428571428571 48.33333333333212 94.99999999999999 58 99.99999999999999 58C 99.99999999999999 58 99.99999999999999 58 99.99999999999999 58 L 0 58z"
                                                                        pathFrom="M 0 10082.333333333332 L 0 10082.333333333332 L 14.285714285714285 10082.333333333332 L 28.57142857142857 10082.333333333332 L 42.857142857142854 10082.333333333332 L 57.14285714285714 10082.333333333332 L 71.42857142857142 10082.333333333332 L 85.71428571428571 10082.333333333332 L 99.99999999999999 10082.333333333332 L 0 10082.333333333332">
                                                                    </path>
                                                                    <path id="SvgjsPath3005"
                                                                        d="M0 19.33333333333212C4.999999999999999 19.33333333333212 9.285714285714285 0 14.285714285714285 0C19.285714285714285 0 23.57142857142857 9.66666666666606 28.57142857142857 9.66666666666606C33.57142857142857 9.66666666666606 37.857142857142854 29 42.857142857142854 29C47.857142857142854 29 52.14285714285714 19.33333333333212 57.14285714285714 19.33333333333212C62.14285714285714 19.33333333333212 66.42857142857142 29 71.42857142857142 29C76.42857142857142 29 80.71428571428571 48.33333333333212 85.71428571428571 48.33333333333212C90.71428571428571 48.33333333333212 94.99999999999999 58 99.99999999999999 58C99.99999999999999 58 99.99999999999999 58 99.99999999999999 58 "
                                                                        fill="none" fill-opacity="1"
                                                                        stroke="#ffffff" stroke-opacity="1"
                                                                        stroke-linecap="butt" stroke-width="2"
                                                                        stroke-dasharray="0" class="apexcharts-area"
                                                                        index="0"
                                                                        clip-path="url(#gridRectMask3wdj2ilz)"
                                                                        pathTo="M 0 19.33333333333212C 4.999999999999999 19.33333333333212 9.285714285714285 0 14.285714285714285 0C 19.285714285714285 0 23.57142857142857 9.66666666666606 28.57142857142857 9.66666666666606C 33.57142857142857 9.66666666666606 37.857142857142854 29 42.857142857142854 29C 47.857142857142854 29 52.14285714285714 19.33333333333212 57.14285714285714 19.33333333333212C 62.14285714285714 19.33333333333212 66.42857142857142 29 71.42857142857142 29C 76.42857142857142 29 80.71428571428571 48.33333333333212 85.71428571428571 48.33333333333212C 90.71428571428571 48.33333333333212 94.99999999999999 58 99.99999999999999 58"
                                                                        pathFrom="M 0 10082.333333333332 L 0 10082.333333333332 L 14.285714285714285 10082.333333333332 L 28.57142857142857 10082.333333333332 L 42.857142857142854 10082.333333333332 L 57.14285714285714 10082.333333333332 L 71.42857142857142 10082.333333333332 L 85.71428571428571 10082.333333333332 L 99.99999999999999 10082.333333333332"
                                                                        fill-rule="evenodd"></path>
                                                                    <g id="SvgjsG2998"
                                                                        class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown"
                                                                        data:realIndex="0">
                                                                        <g class="apexcharts-series-markers">
                                                                            <circle id="SvgjsCircle3030" r="0"
                                                                                cx="0" cy="0"
                                                                                class="apexcharts-marker wkq1xwlxj no-pointer-events"
                                                                                stroke="#ffffff" fill="#ffffff"
                                                                                fill-opacity="1" stroke-width="2"
                                                                                stroke-opacity="0.9"
                                                                                default-marker-size="0"></circle>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                                <g id="SvgjsG2999" class="apexcharts-datalabels"
                                                                    data:realIndex="0"></g>
                                                            </g>
                                                            <line id="SvgjsLine3014" x1="0" y1="0"
                                                                x2="100" y2="0" stroke="#b6b6b6"
                                                                stroke-dasharray="0" stroke-width="1"
                                                                stroke-linecap="butt"
                                                                class="apexcharts-ycrosshairs"></line>
                                                            <line id="SvgjsLine3015" x1="0" y1="0"
                                                                x2="100" y2="0" stroke-dasharray="0"
                                                                stroke-width="0" stroke-linecap="butt"
                                                                class="apexcharts-ycrosshairs-hidden"></line>
                                                            <g id="SvgjsG3016" class="apexcharts-xaxis"
                                                                transform="translate(0, 0)">
                                                                <g id="SvgjsG3017" class="apexcharts-xaxis-texts-g"
                                                                    transform="translate(0, -4)"></g>
                                                            </g>
                                                            <g id="SvgjsG3027"
                                                                class="apexcharts-yaxis-annotations apexcharts-hidden-element-shown">
                                                            </g>
                                                            <g id="SvgjsG3028"
                                                                class="apexcharts-xaxis-annotations apexcharts-hidden-element-shown">
                                                            </g>
                                                            <g id="SvgjsG3029"
                                                                class="apexcharts-point-annotations apexcharts-hidden-element-shown">
                                                            </g>
                                                        </g>
                                                    </svg>
                                                    <div class="apexcharts-tooltip apexcharts-theme-light">
                                                        <div class="apexcharts-tooltip-series-group"
                                                            style="order: 1;"><span
                                                                class="apexcharts-tooltip-marker"
                                                                style="background-color: rgb(255, 255, 255);"></span>
                                                            <div class="apexcharts-tooltip-text"
                                                                style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                                <div class="apexcharts-tooltip-y-group"><span
                                                                        class="apexcharts-tooltip-text-y-label"></span><span
                                                                        class="apexcharts-tooltip-text-y-value"></span>
                                                                </div>
                                                                <div class="apexcharts-tooltip-goals-group"><span
                                                                        class="apexcharts-tooltip-text-goals-label"></span><span
                                                                        class="apexcharts-tooltip-text-goals-value"></span>
                                                                </div>
                                                                <div class="apexcharts-tooltip-z-group"><span
                                                                        class="apexcharts-tooltip-text-z-label"></span><span
                                                                        class="apexcharts-tooltip-text-z-value"></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                                        <div class="apexcharts-yaxistooltip-text"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-link col-lg-3 col-md-3 col-sm-12 price-item price-down"
                                    data-komoditas-id="101"
                                    style="--bg-img: url('https://panelharga.badanpangan.go.id/src/assets/img/komoditas-ikon/minyak-goreng-curah.png');"
                                    onclick="checkDetails(this)">
                                    <div
                                        style="display:flex;flex-direction:column;justify-content:space-between;align-items:flex-start;height:100%;">
                                        <span class="price-item-title">Minyak Goreng Curah</span>
                                        <div
                                            style="display:flex;justify-content:space-between;align-items:flex-end;width:100%;">
                                            <div style="margin-right:12px;font-size:13px;">
                                                <span class="price-item-price"
                                                    style="background-color:transparent;">
                                                    Rp 15.890
                                                </span>
                                                <span class="price-item-per">Rp./Liter</span>
                                                <span class="price-item-increment"
                                                    style="background-color:#ff0000;padding:0px 5px;border-radius:5px;">
                                                    <i class="fa-solid fa-arrow-up" style="margin-right: 4px"></i>
                                                    0.63% - Rp 100
                                                </span>
                                            </div>
                                            <div class="chart" id="chart-101" style="min-height: 60px;">
                                                <div id="apexchartsr18rksqg"
                                                    class="apexcharts-canvas apexchartsr18rksqg apexcharts-theme-light"
                                                    style="width: 100px; height: 60px;"><svg id="SvgjsSvg3031"
                                                        width="100" height="60"
                                                        xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                                        xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg"
                                                        xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                                        style="background: transparent;">
                                                        <foreignObject x="0" y="0" width="100" height="60">
                                                            <div class="apexcharts-legend"
                                                                xmlns="http://www.w3.org/1999/xhtml"
                                                                style="max-height: 30px;"></div>
                                                        </foreignObject>
                                                        <rect id="SvgjsRect3035" width="0" height="0"
                                                            x="0" y="0" rx="0" ry="0"
                                                            opacity="1" stroke-width="0" stroke="none"
                                                            stroke-dasharray="0" fill="#fefefe"></rect>
                                                        <g id="SvgjsG3069" class="apexcharts-yaxis" rel="0"
                                                            transform="translate(-18, 0)"></g>
                                                        <g id="SvgjsG3033"
                                                            class="apexcharts-inner apexcharts-graphical"
                                                            transform="translate(0, 1)">
                                                            <defs id="SvgjsDefs3032">
                                                                <clipPath id="gridRectMaskr18rksqg">
                                                                    <rect id="SvgjsRect3037" width="106"
                                                                        height="64" x="-3" y="-3" rx="0"
                                                                        ry="0" opacity="1"
                                                                        stroke-width="0" stroke="none"
                                                                        stroke-dasharray="0" fill="#fff"></rect>
                                                                </clipPath>
                                                                <clipPath id="forecastMaskr18rksqg"></clipPath>
                                                                <clipPath id="nonForecastMaskr18rksqg"></clipPath>
                                                                <clipPath id="gridRectMarkerMaskr18rksqg">
                                                                    <rect id="SvgjsRect3038" width="104"
                                                                        height="62" x="-2" y="-2" rx="0"
                                                                        ry="0" opacity="1"
                                                                        stroke-width="0" stroke="none"
                                                                        stroke-dasharray="0" fill="#fff"></rect>
                                                                </clipPath>
                                                                <linearGradient id="SvgjsLinearGradient3043"
                                                                    x1="0" y1="0" x2="0"
                                                                    y2="1">
                                                                    <stop id="SvgjsStop3044" stop-opacity="0.65"
                                                                        stop-color="rgba(255,255,255,0.65)"
                                                                        offset="0"></stop>
                                                                    <stop id="SvgjsStop3045" stop-opacity="0.5"
                                                                        stop-color="rgba(128,135,255,0.5)"
                                                                        offset="1"></stop>
                                                                    <stop id="SvgjsStop3046" stop-opacity="0.5"
                                                                        stop-color="rgba(128,135,255,0.5)"
                                                                        offset="1"></stop>
                                                                </linearGradient>
                                                            </defs>
                                                            <line id="SvgjsLine3036" x1="0" y1="0"
                                                                x2="0" y2="58" stroke="#b6b6b6"
                                                                stroke-dasharray="3" stroke-linecap="butt"
                                                                class="apexcharts-xcrosshairs" x="0" y="0"
                                                                width="1" height="58" fill="#b1b9c4"
                                                                filter="none" fill-opacity="0.9"
                                                                stroke-width="1"></line>
                                                            <g id="SvgjsG3049" class="apexcharts-grid">
                                                                <g id="SvgjsG3050"
                                                                    class="apexcharts-gridlines-horizontal"
                                                                    style="display: none;">
                                                                    <line id="SvgjsLine3053" x1="0"
                                                                        y1="0" x2="100"
                                                                        y2="0" stroke="#e0e0e0"
                                                                        stroke-dasharray="0" stroke-linecap="butt"
                                                                        class="apexcharts-gridline"></line>
                                                                    <line id="SvgjsLine3054" x1="0"
                                                                        y1="58" x2="100"
                                                                        y2="58" stroke="#e0e0e0"
                                                                        stroke-dasharray="0" stroke-linecap="butt"
                                                                        class="apexcharts-gridline"></line>
                                                                </g>
                                                                <g id="SvgjsG3051"
                                                                    class="apexcharts-gridlines-vertical"
                                                                    style="display: none;"></g>
                                                                <line id="SvgjsLine3056" x1="0"
                                                                    y1="58" x2="100" y2="58"
                                                                    stroke="transparent" stroke-dasharray="0"
                                                                    stroke-linecap="butt"></line>
                                                                <line id="SvgjsLine3055" x1="0"
                                                                    y1="1" x2="0" y2="58"
                                                                    stroke="transparent" stroke-dasharray="0"
                                                                    stroke-linecap="butt"></line>
                                                            </g>
                                                            <g id="SvgjsG3052" class="apexcharts-grid-borders"
                                                                style="display: none;"></g>
                                                            <g id="SvgjsG3039"
                                                                class="apexcharts-area-series apexcharts-plot-series">
                                                                <g id="SvgjsG3040" class="apexcharts-series"
                                                                    zIndex="0" seriesName="series-1"
                                                                    data:longestSeries="true" rel="1"
                                                                    data:realIndex="0">
                                                                    <path id="SvgjsPath3047"
                                                                        d="M0 17.399999999999636C4.999999999999999 17.399999999999636 9.285714285714285 40.600000000000364 14.285714285714285 40.600000000000364C19.285714285714285 40.600000000000364 23.57142857142857 40.600000000000364 28.57142857142857 40.600000000000364C33.57142857142857 40.600000000000364 37.857142857142854 17.399999999999636 42.857142857142854 17.399999999999636C47.857142857142854 17.399999999999636 52.14285714285714 58 57.14285714285714 58C62.14285714285714 58 66.42857142857142 23.200000000000728 71.42857142857142 23.200000000000728C76.42857142857142 23.200000000000728 80.71428571428571 58 85.71428571428571 58C90.71428571428571 58 94.99999999999999 0 99.99999999999999 0C99.99999999999999 0 99.99999999999999 0 99.99999999999999 58L0 58C0 58 0 17.399999999999636 0 17.399999999999636 "
                                                                        fill="url(#SvgjsLinearGradient3043)"
                                                                        fill-opacity="1" stroke-opacity="1"
                                                                        stroke-linecap="butt" stroke-width="0"
                                                                        stroke-dasharray="0" class="apexcharts-area"
                                                                        index="0"
                                                                        clip-path="url(#gridRectMaskr18rksqg)"
                                                                        pathTo="M 0 17.399999999999636C 4.999999999999999 17.399999999999636 9.285714285714285 40.600000000000364 14.285714285714285 40.600000000000364C 19.285714285714285 40.600000000000364 23.57142857142857 40.600000000000364 28.57142857142857 40.600000000000364C 33.57142857142857 40.600000000000364 37.857142857142854 17.399999999999636 42.857142857142854 17.399999999999636C 47.857142857142854 17.399999999999636 52.14285714285714 58 57.14285714285714 58C 62.14285714285714 58 66.42857142857142 23.200000000000728 71.42857142857142 23.200000000000728C 76.42857142857142 23.200000000000728 80.71428571428571 58 85.71428571428571 58C 90.71428571428571 58 94.99999999999999 0 99.99999999999999 0C 99.99999999999999 0 99.99999999999999 0 99.99999999999999 58 L 0 58z"
                                                                        pathFrom="M 0 9216.2 L 0 9216.2 L 14.285714285714285 9216.2 L 28.57142857142857 9216.2 L 42.857142857142854 9216.2 L 57.14285714285714 9216.2 L 71.42857142857142 9216.2 L 85.71428571428571 9216.2 L 99.99999999999999 9216.2 L 0 9216.2">
                                                                    </path>
                                                                    <path id="SvgjsPath3048"
                                                                        d="M0 17.399999999999636C4.999999999999999 17.399999999999636 9.285714285714285 40.600000000000364 14.285714285714285 40.600000000000364C19.285714285714285 40.600000000000364 23.57142857142857 40.600000000000364 28.57142857142857 40.600000000000364C33.57142857142857 40.600000000000364 37.857142857142854 17.399999999999636 42.857142857142854 17.399999999999636C47.857142857142854 17.399999999999636 52.14285714285714 58 57.14285714285714 58C62.14285714285714 58 66.42857142857142 23.200000000000728 71.42857142857142 23.200000000000728C76.42857142857142 23.200000000000728 80.71428571428571 58 85.71428571428571 58C90.71428571428571 58 94.99999999999999 0 99.99999999999999 0C99.99999999999999 0 99.99999999999999 0 99.99999999999999 0 "
                                                                        fill="none" fill-opacity="1"
                                                                        stroke="#ffffff" stroke-opacity="1"
                                                                        stroke-linecap="butt" stroke-width="2"
                                                                        stroke-dasharray="0" class="apexcharts-area"
                                                                        index="0"
                                                                        clip-path="url(#gridRectMaskr18rksqg)"
                                                                        pathTo="M 0 17.399999999999636C 4.999999999999999 17.399999999999636 9.285714285714285 40.600000000000364 14.285714285714285 40.600000000000364C 19.285714285714285 40.600000000000364 23.57142857142857 40.600000000000364 28.57142857142857 40.600000000000364C 33.57142857142857 40.600000000000364 37.857142857142854 17.399999999999636 42.857142857142854 17.399999999999636C 47.857142857142854 17.399999999999636 52.14285714285714 58 57.14285714285714 58C 62.14285714285714 58 66.42857142857142 23.200000000000728 71.42857142857142 23.200000000000728C 76.42857142857142 23.200000000000728 80.71428571428571 58 85.71428571428571 58C 90.71428571428571 58 94.99999999999999 0 99.99999999999999 0"
                                                                        pathFrom="M 0 9216.2 L 0 9216.2 L 14.285714285714285 9216.2 L 28.57142857142857 9216.2 L 42.857142857142854 9216.2 L 57.14285714285714 9216.2 L 71.42857142857142 9216.2 L 85.71428571428571 9216.2 L 99.99999999999999 9216.2"
                                                                        fill-rule="evenodd"></path>
                                                                    <g id="SvgjsG3041"
                                                                        class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown"
                                                                        data:realIndex="0">
                                                                        <g class="apexcharts-series-markers">
                                                                            <circle id="SvgjsCircle3073" r="0"
                                                                                cx="0" cy="0"
                                                                                class="apexcharts-marker wrp1lsl4p no-pointer-events"
                                                                                stroke="#ffffff" fill="#ffffff"
                                                                                fill-opacity="1" stroke-width="2"
                                                                                stroke-opacity="0.9"
                                                                                default-marker-size="0"></circle>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                                <g id="SvgjsG3042" class="apexcharts-datalabels"
                                                                    data:realIndex="0"></g>
                                                            </g>
                                                            <line id="SvgjsLine3057" x1="0" y1="0"
                                                                x2="100" y2="0" stroke="#b6b6b6"
                                                                stroke-dasharray="0" stroke-width="1"
                                                                stroke-linecap="butt"
                                                                class="apexcharts-ycrosshairs"></line>
                                                            <line id="SvgjsLine3058" x1="0" y1="0"
                                                                x2="100" y2="0" stroke-dasharray="0"
                                                                stroke-width="0" stroke-linecap="butt"
                                                                class="apexcharts-ycrosshairs-hidden"></line>
                                                            <g id="SvgjsG3059" class="apexcharts-xaxis"
                                                                transform="translate(0, 0)">
                                                                <g id="SvgjsG3060" class="apexcharts-xaxis-texts-g"
                                                                    transform="translate(0, -4)"></g>
                                                            </g>
                                                            <g id="SvgjsG3070"
                                                                class="apexcharts-yaxis-annotations apexcharts-hidden-element-shown">
                                                            </g>
                                                            <g id="SvgjsG3071"
                                                                class="apexcharts-xaxis-annotations apexcharts-hidden-element-shown">
                                                            </g>
                                                            <g id="SvgjsG3072"
                                                                class="apexcharts-point-annotations apexcharts-hidden-element-shown">
                                                            </g>
                                                        </g>
                                                    </svg>
                                                    <div class="apexcharts-tooltip apexcharts-theme-light">
                                                        <div class="apexcharts-tooltip-series-group"
                                                            style="order: 1;"><span
                                                                class="apexcharts-tooltip-marker"
                                                                style="background-color: rgb(255, 255, 255);"></span>
                                                            <div class="apexcharts-tooltip-text"
                                                                style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                                <div class="apexcharts-tooltip-y-group"><span
                                                                        class="apexcharts-tooltip-text-y-label"></span><span
                                                                        class="apexcharts-tooltip-text-y-value"></span>
                                                                </div>
                                                                <div class="apexcharts-tooltip-goals-group"><span
                                                                        class="apexcharts-tooltip-text-goals-label"></span><span
                                                                        class="apexcharts-tooltip-text-goals-value"></span>
                                                                </div>
                                                                <div class="apexcharts-tooltip-z-group"><span
                                                                        class="apexcharts-tooltip-text-z-label"></span><span
                                                                        class="apexcharts-tooltip-text-z-value"></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                                        <div class="apexcharts-yaxistooltip-text"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-link col-lg-3 col-md-3 col-sm-12 price-item price-up"
                                    data-komoditas-id="102"
                                    style="--bg-img: url('https://panelharga.badanpangan.go.id/src/assets/img/komoditas-ikon/jagung-tk-peternak.png');"
                                    onclick="checkDetails(this)">
                                    <div
                                        style="display:flex;flex-direction:column;justify-content:space-between;align-items:flex-start;height:100%;">
                                        <span class="price-item-title">Jagung Tk Peternak</span>
                                        <div
                                            style="display:flex;justify-content:space-between;align-items:flex-end;width:100%;">
                                            <div style="margin-right:12px;font-size:13px;">
                                                <span class="price-item-price"
                                                    style="background-color:transparent;">
                                                    Rp 5.600
                                                </span>
                                                <span class="price-item-per">Rp/kg</span>
                                                <span class="price-item-increment"
                                                    style="background-color:#008000;padding:0px 5px;border-radius:5px;">
                                                    <i class="fa-solid fa-arrow-down" style="margin-right: 4px"></i>
                                                    -0.88% - Rp -50
                                                </span>
                                            </div>
                                            <div class="chart" id="chart-102" style="min-height: 60px;">
                                                <div id="apexchartsjyw6on7f"
                                                    class="apexcharts-canvas apexchartsjyw6on7f apexcharts-theme-light"
                                                    style="width: 100px; height: 60px;"><svg id="SvgjsSvg3074"
                                                        width="100" height="60"
                                                        xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                                        xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg"
                                                        xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                                        style="background: transparent;">
                                                        <foreignObject x="0" y="0" width="100" height="60">
                                                            <div class="apexcharts-legend"
                                                                xmlns="http://www.w3.org/1999/xhtml"
                                                                style="max-height: 30px;"></div>
                                                        </foreignObject>
                                                        <rect id="SvgjsRect3078" width="0" height="0"
                                                            x="0" y="0" rx="0" ry="0"
                                                            opacity="1" stroke-width="0" stroke="none"
                                                            stroke-dasharray="0" fill="#fefefe"></rect>
                                                        <g id="SvgjsG3112" class="apexcharts-yaxis" rel="0"
                                                            transform="translate(-18, 0)"></g>
                                                        <g id="SvgjsG3076"
                                                            class="apexcharts-inner apexcharts-graphical"
                                                            transform="translate(0, 1)">
                                                            <defs id="SvgjsDefs3075">
                                                                <clipPath id="gridRectMaskjyw6on7f">
                                                                    <rect id="SvgjsRect3080" width="106"
                                                                        height="64" x="-3" y="-3" rx="0"
                                                                        ry="0" opacity="1"
                                                                        stroke-width="0" stroke="none"
                                                                        stroke-dasharray="0" fill="#fff"></rect>
                                                                </clipPath>
                                                                <clipPath id="forecastMaskjyw6on7f"></clipPath>
                                                                <clipPath id="nonForecastMaskjyw6on7f"></clipPath>
                                                                <clipPath id="gridRectMarkerMaskjyw6on7f">
                                                                    <rect id="SvgjsRect3081" width="104"
                                                                        height="62" x="-2" y="-2" rx="0"
                                                                        ry="0" opacity="1"
                                                                        stroke-width="0" stroke="none"
                                                                        stroke-dasharray="0" fill="#fff"></rect>
                                                                </clipPath>
                                                                <linearGradient id="SvgjsLinearGradient3086"
                                                                    x1="0" y1="0" x2="0"
                                                                    y2="1">
                                                                    <stop id="SvgjsStop3087" stop-opacity="0.65"
                                                                        stop-color="rgba(255,255,255,0.65)"
                                                                        offset="0"></stop>
                                                                    <stop id="SvgjsStop3088" stop-opacity="0.5"
                                                                        stop-color="rgba(128,135,255,0.5)"
                                                                        offset="1"></stop>
                                                                    <stop id="SvgjsStop3089" stop-opacity="0.5"
                                                                        stop-color="rgba(128,135,255,0.5)"
                                                                        offset="1"></stop>
                                                                </linearGradient>
                                                            </defs>
                                                            <line id="SvgjsLine3079" x1="0" y1="0"
                                                                x2="0" y2="58" stroke="#b6b6b6"
                                                                stroke-dasharray="3" stroke-linecap="butt"
                                                                class="apexcharts-xcrosshairs" x="0" y="0"
                                                                width="1" height="58" fill="#b1b9c4"
                                                                filter="none" fill-opacity="0.9"
                                                                stroke-width="1"></line>
                                                            <g id="SvgjsG3092" class="apexcharts-grid">
                                                                <g id="SvgjsG3093"
                                                                    class="apexcharts-gridlines-horizontal"
                                                                    style="display: none;">
                                                                    <line id="SvgjsLine3096" x1="0"
                                                                        y1="0" x2="100"
                                                                        y2="0" stroke="#e0e0e0"
                                                                        stroke-dasharray="0" stroke-linecap="butt"
                                                                        class="apexcharts-gridline"></line>
                                                                    <line id="SvgjsLine3097" x1="0"
                                                                        y1="58" x2="100"
                                                                        y2="58" stroke="#e0e0e0"
                                                                        stroke-dasharray="0" stroke-linecap="butt"
                                                                        class="apexcharts-gridline"></line>
                                                                </g>
                                                                <g id="SvgjsG3094"
                                                                    class="apexcharts-gridlines-vertical"
                                                                    style="display: none;"></g>
                                                                <line id="SvgjsLine3099" x1="0"
                                                                    y1="58" x2="100" y2="58"
                                                                    stroke="transparent" stroke-dasharray="0"
                                                                    stroke-linecap="butt"></line>
                                                                <line id="SvgjsLine3098" x1="0"
                                                                    y1="1" x2="0" y2="58"
                                                                    stroke="transparent" stroke-dasharray="0"
                                                                    stroke-linecap="butt"></line>
                                                            </g>
                                                            <g id="SvgjsG3095" class="apexcharts-grid-borders"
                                                                style="display: none;"></g>
                                                            <g id="SvgjsG3082"
                                                                class="apexcharts-area-series apexcharts-plot-series">
                                                                <g id="SvgjsG3083" class="apexcharts-series"
                                                                    zIndex="0" seriesName="series-1"
                                                                    data:longestSeries="true" rel="1"
                                                                    data:realIndex="0">
                                                                    <path id="SvgjsPath3090"
                                                                        d="M0 2.8999999999998636C4.999999999999999 2.8999999999998636 9.285714285714285 20.299999999999955 14.285714285714285 20.299999999999955C19.285714285714285 20.299999999999955 23.57142857142857 14.5 28.57142857142857 14.5C33.57142857142857 14.5 37.857142857142854 26.09999999999991 42.857142857142854 26.09999999999991C47.857142857142854 26.09999999999991 52.14285714285714 34.799999999999955 57.14285714285714 34.799999999999955C62.14285714285714 34.799999999999955 66.42857142857142 37.69999999999982 71.42857142857142 37.69999999999982C76.42857142857142 37.69999999999982 80.71428571428571 43.5 85.71428571428571 43.5C90.71428571428571 43.5 94.99999999999999 58 99.99999999999999 58C99.99999999999999 58 99.99999999999999 58 99.99999999999999 58L0 58C0 58 0 2.8999999999998636 0 2.8999999999998636 "
                                                                        fill="url(#SvgjsLinearGradient3086)"
                                                                        fill-opacity="1" stroke-opacity="1"
                                                                        stroke-linecap="butt" stroke-width="0"
                                                                        stroke-dasharray="0" class="apexcharts-area"
                                                                        index="0"
                                                                        clip-path="url(#gridRectMaskjyw6on7f)"
                                                                        pathTo="M 0 2.8999999999998636C 4.999999999999999 2.8999999999998636 9.285714285714285 20.299999999999955 14.285714285714285 20.299999999999955C 19.285714285714285 20.299999999999955 23.57142857142857 14.5 28.57142857142857 14.5C 33.57142857142857 14.5 37.857142857142854 26.09999999999991 42.857142857142854 26.09999999999991C 47.857142857142854 26.09999999999991 52.14285714285714 34.799999999999955 57.14285714285714 34.799999999999955C 62.14285714285714 34.799999999999955 66.42857142857142 37.69999999999982 71.42857142857142 37.69999999999982C 76.42857142857142 37.69999999999982 80.71428571428571 43.5 85.71428571428571 43.5C 90.71428571428571 43.5 94.99999999999999 58 99.99999999999999 58C 99.99999999999999 58 99.99999999999999 58 99.99999999999999 58 L 0 58z"
                                                                        pathFrom="M 0 1682 L 0 1682 L 14.285714285714285 1682 L 28.57142857142857 1682 L 42.857142857142854 1682 L 57.14285714285714 1682 L 71.42857142857142 1682 L 85.71428571428571 1682 L 99.99999999999999 1682 L 0 1682">
                                                                    </path>
                                                                    <path id="SvgjsPath3091"
                                                                        d="M0 2.8999999999998636C4.999999999999999 2.8999999999998636 9.285714285714285 20.299999999999955 14.285714285714285 20.299999999999955C19.285714285714285 20.299999999999955 23.57142857142857 14.5 28.57142857142857 14.5C33.57142857142857 14.5 37.857142857142854 26.09999999999991 42.857142857142854 26.09999999999991C47.857142857142854 26.09999999999991 52.14285714285714 34.799999999999955 57.14285714285714 34.799999999999955C62.14285714285714 34.799999999999955 66.42857142857142 37.69999999999982 71.42857142857142 37.69999999999982C76.42857142857142 37.69999999999982 80.71428571428571 43.5 85.71428571428571 43.5C90.71428571428571 43.5 94.99999999999999 58 99.99999999999999 58C99.99999999999999 58 99.99999999999999 58 99.99999999999999 58 "
                                                                        fill="none" fill-opacity="1"
                                                                        stroke="#ffffff" stroke-opacity="1"
                                                                        stroke-linecap="butt" stroke-width="2"
                                                                        stroke-dasharray="0" class="apexcharts-area"
                                                                        index="0"
                                                                        clip-path="url(#gridRectMaskjyw6on7f)"
                                                                        pathTo="M 0 2.8999999999998636C 4.999999999999999 2.8999999999998636 9.285714285714285 20.299999999999955 14.285714285714285 20.299999999999955C 19.285714285714285 20.299999999999955 23.57142857142857 14.5 28.57142857142857 14.5C 33.57142857142857 14.5 37.857142857142854 26.09999999999991 42.857142857142854 26.09999999999991C 47.857142857142854 26.09999999999991 52.14285714285714 34.799999999999955 57.14285714285714 34.799999999999955C 62.14285714285714 34.799999999999955 66.42857142857142 37.69999999999982 71.42857142857142 37.69999999999982C 76.42857142857142 37.69999999999982 80.71428571428571 43.5 85.71428571428571 43.5C 90.71428571428571 43.5 94.99999999999999 58 99.99999999999999 58"
                                                                        pathFrom="M 0 1682 L 0 1682 L 14.285714285714285 1682 L 28.57142857142857 1682 L 42.857142857142854 1682 L 57.14285714285714 1682 L 71.42857142857142 1682 L 85.71428571428571 1682 L 99.99999999999999 1682"
                                                                        fill-rule="evenodd"></path>
                                                                    <g id="SvgjsG3084"
                                                                        class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown"
                                                                        data:realIndex="0">
                                                                        <g class="apexcharts-series-markers">
                                                                            <circle id="SvgjsCircle3116" r="0"
                                                                                cx="0" cy="0"
                                                                                class="apexcharts-marker wazn50t91 no-pointer-events"
                                                                                stroke="#ffffff" fill="#ffffff"
                                                                                fill-opacity="1" stroke-width="2"
                                                                                stroke-opacity="0.9"
                                                                                default-marker-size="0"></circle>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                                <g id="SvgjsG3085" class="apexcharts-datalabels"
                                                                    data:realIndex="0"></g>
                                                            </g>
                                                            <line id="SvgjsLine3100" x1="0" y1="0"
                                                                x2="100" y2="0" stroke="#b6b6b6"
                                                                stroke-dasharray="0" stroke-width="1"
                                                                stroke-linecap="butt"
                                                                class="apexcharts-ycrosshairs"></line>
                                                            <line id="SvgjsLine3101" x1="0" y1="0"
                                                                x2="100" y2="0" stroke-dasharray="0"
                                                                stroke-width="0" stroke-linecap="butt"
                                                                class="apexcharts-ycrosshairs-hidden"></line>
                                                            <g id="SvgjsG3102" class="apexcharts-xaxis"
                                                                transform="translate(0, 0)">
                                                                <g id="SvgjsG3103" class="apexcharts-xaxis-texts-g"
                                                                    transform="translate(0, -4)"></g>
                                                            </g>
                                                            <g id="SvgjsG3113"
                                                                class="apexcharts-yaxis-annotations apexcharts-hidden-element-shown">
                                                            </g>
                                                            <g id="SvgjsG3114"
                                                                class="apexcharts-xaxis-annotations apexcharts-hidden-element-shown">
                                                            </g>
                                                            <g id="SvgjsG3115"
                                                                class="apexcharts-point-annotations apexcharts-hidden-element-shown">
                                                            </g>
                                                        </g>
                                                    </svg>
                                                    <div class="apexcharts-tooltip apexcharts-theme-light">
                                                        <div class="apexcharts-tooltip-series-group"
                                                            style="order: 1;"><span
                                                                class="apexcharts-tooltip-marker"
                                                                style="background-color: rgb(255, 255, 255);"></span>
                                                            <div class="apexcharts-tooltip-text"
                                                                style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                                <div class="apexcharts-tooltip-y-group"><span
                                                                        class="apexcharts-tooltip-text-y-label"></span><span
                                                                        class="apexcharts-tooltip-text-y-value"></span>
                                                                </div>
                                                                <div class="apexcharts-tooltip-goals-group"><span
                                                                        class="apexcharts-tooltip-text-goals-label"></span><span
                                                                        class="apexcharts-tooltip-text-goals-value"></span>
                                                                </div>
                                                                <div class="apexcharts-tooltip-z-group"><span
                                                                        class="apexcharts-tooltip-text-z-label"></span><span
                                                                        class="apexcharts-tooltip-text-z-value"></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                                        <div class="apexcharts-yaxistooltip-text"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-link col-lg-3 col-md-3 col-sm-12 price-item price-up"
                                    data-komoditas-id="104"
                                    style="--bg-img: url('https://panelharga.badanpangan.go.id/src/assets/img/komoditas-ikon/ikan-kembung.png');"
                                    onclick="checkDetails(this)">
                                    <div
                                        style="display:flex;flex-direction:column;justify-content:space-between;align-items:flex-start;height:100%;">
                                        <span class="price-item-title">Ikan Kembung</span>
                                        <div
                                            style="display:flex;justify-content:space-between;align-items:flex-end;width:100%;">
                                            <div style="margin-right:12px;font-size:13px;">
                                                <span class="price-item-price"
                                                    style="background-color:transparent;">
                                                    Rp 36.580
                                                </span>
                                                <span class="price-item-per">Rp./Kg</span>
                                                <span class="price-item-increment"
                                                    style="background-color:#008000;padding:0px 5px;border-radius:5px;">
                                                    <i class="fa-solid fa-arrow-down" style="margin-right: 4px"></i>
                                                    -0.30% - Rp -110
                                                </span>
                                            </div>
                                            <div class="chart" id="chart-104" style="min-height: 60px;">
                                                <div id="apexcharts99cpvpge"
                                                    class="apexcharts-canvas apexcharts99cpvpge apexcharts-theme-light"
                                                    style="width: 100px; height: 60px;"><svg id="SvgjsSvg3117"
                                                        width="100" height="60"
                                                        xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                                        xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg"
                                                        xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                                        style="background: transparent;">
                                                        <foreignObject x="0" y="0" width="100" height="60">
                                                            <div class="apexcharts-legend"
                                                                xmlns="http://www.w3.org/1999/xhtml"
                                                                style="max-height: 30px;"></div>
                                                        </foreignObject>
                                                        <rect id="SvgjsRect3121" width="0" height="0"
                                                            x="0" y="0" rx="0" ry="0"
                                                            opacity="1" stroke-width="0" stroke="none"
                                                            stroke-dasharray="0" fill="#fefefe"></rect>
                                                        <g id="SvgjsG3155" class="apexcharts-yaxis" rel="0"
                                                            transform="translate(-18, 0)"></g>
                                                        <g id="SvgjsG3119"
                                                            class="apexcharts-inner apexcharts-graphical"
                                                            transform="translate(0, 1)">
                                                            <defs id="SvgjsDefs3118">
                                                                <clipPath id="gridRectMask99cpvpge">
                                                                    <rect id="SvgjsRect3123" width="106"
                                                                        height="64" x="-3" y="-3" rx="0"
                                                                        ry="0" opacity="1"
                                                                        stroke-width="0" stroke="none"
                                                                        stroke-dasharray="0" fill="#fff"></rect>
                                                                </clipPath>
                                                                <clipPath id="forecastMask99cpvpge"></clipPath>
                                                                <clipPath id="nonForecastMask99cpvpge"></clipPath>
                                                                <clipPath id="gridRectMarkerMask99cpvpge">
                                                                    <rect id="SvgjsRect3124" width="104"
                                                                        height="62" x="-2" y="-2" rx="0"
                                                                        ry="0" opacity="1"
                                                                        stroke-width="0" stroke="none"
                                                                        stroke-dasharray="0" fill="#fff"></rect>
                                                                </clipPath>
                                                                <linearGradient id="SvgjsLinearGradient3129"
                                                                    x1="0" y1="0" x2="0"
                                                                    y2="1">
                                                                    <stop id="SvgjsStop3130" stop-opacity="0.65"
                                                                        stop-color="rgba(255,255,255,0.65)"
                                                                        offset="0"></stop>
                                                                    <stop id="SvgjsStop3131" stop-opacity="0.5"
                                                                        stop-color="rgba(128,135,255,0.5)"
                                                                        offset="1"></stop>
                                                                    <stop id="SvgjsStop3132" stop-opacity="0.5"
                                                                        stop-color="rgba(128,135,255,0.5)"
                                                                        offset="1"></stop>
                                                                </linearGradient>
                                                            </defs>
                                                            <line id="SvgjsLine3122" x1="0" y1="0"
                                                                x2="0" y2="58" stroke="#b6b6b6"
                                                                stroke-dasharray="3" stroke-linecap="butt"
                                                                class="apexcharts-xcrosshairs" x="0" y="0"
                                                                width="1" height="58" fill="#b1b9c4"
                                                                filter="none" fill-opacity="0.9"
                                                                stroke-width="1"></line>
                                                            <g id="SvgjsG3135" class="apexcharts-grid">
                                                                <g id="SvgjsG3136"
                                                                    class="apexcharts-gridlines-horizontal"
                                                                    style="display: none;">
                                                                    <line id="SvgjsLine3139" x1="0"
                                                                        y1="0" x2="100"
                                                                        y2="0" stroke="#e0e0e0"
                                                                        stroke-dasharray="0" stroke-linecap="butt"
                                                                        class="apexcharts-gridline"></line>
                                                                    <line id="SvgjsLine3140" x1="0"
                                                                        y1="58" x2="100"
                                                                        y2="58" stroke="#e0e0e0"
                                                                        stroke-dasharray="0" stroke-linecap="butt"
                                                                        class="apexcharts-gridline"></line>
                                                                </g>
                                                                <g id="SvgjsG3137"
                                                                    class="apexcharts-gridlines-vertical"
                                                                    style="display: none;"></g>
                                                                <line id="SvgjsLine3142" x1="0"
                                                                    y1="58" x2="100" y2="58"
                                                                    stroke="transparent" stroke-dasharray="0"
                                                                    stroke-linecap="butt"></line>
                                                                <line id="SvgjsLine3141" x1="0"
                                                                    y1="1" x2="0" y2="58"
                                                                    stroke="transparent" stroke-dasharray="0"
                                                                    stroke-linecap="butt"></line>
                                                            </g>
                                                            <g id="SvgjsG3138" class="apexcharts-grid-borders"
                                                                style="display: none;"></g>
                                                            <g id="SvgjsG3125"
                                                                class="apexcharts-area-series apexcharts-plot-series">
                                                                <g id="SvgjsG3126" class="apexcharts-series"
                                                                    zIndex="0" seriesName="series-1"
                                                                    data:longestSeries="true" rel="1"
                                                                    data:realIndex="0">
                                                                    <path id="SvgjsPath3133"
                                                                        d="M0 25.519999999999527C4.999999999999999 25.519999999999527 9.285714285714285 18.55999999999949 14.285714285714285 18.55999999999949C19.285714285714285 18.55999999999949 23.57142857142857 32.47999999999956 28.57142857142857 32.47999999999956C33.57142857142857 32.47999999999956 37.857142857142854 8.11999999999989 42.857142857142854 8.11999999999989C47.857142857142854 8.11999999999989 52.14285714285714 2.319999999999709 57.14285714285714 2.319999999999709C62.14285714285714 2.319999999999709 66.42857142857142 25.519999999999527 71.42857142857142 25.519999999999527C76.42857142857142 25.519999999999527 80.71428571428571 41.75999999999931 85.71428571428571 41.75999999999931C90.71428571428571 41.75999999999931 94.99999999999999 54.51999999999953 99.99999999999999 54.51999999999953C99.99999999999999 54.51999999999953 99.99999999999999 54.51999999999953 99.99999999999999 58L0 58C0 58 0 25.519999999999527 0 25.519999999999527 "
                                                                        fill="url(#SvgjsLinearGradient3129)"
                                                                        fill-opacity="1" stroke-opacity="1"
                                                                        stroke-linecap="butt" stroke-width="0"
                                                                        stroke-dasharray="0" class="apexcharts-area"
                                                                        index="0"
                                                                        clip-path="url(#gridRectMask99cpvpge)"
                                                                        pathTo="M 0 25.519999999999527C 4.999999999999999 25.519999999999527 9.285714285714285 18.55999999999949 14.285714285714285 18.55999999999949C 19.285714285714285 18.55999999999949 23.57142857142857 32.47999999999956 28.57142857142857 32.47999999999956C 33.57142857142857 32.47999999999956 37.857142857142854 8.11999999999989 42.857142857142854 8.11999999999989C 47.857142857142854 8.11999999999989 52.14285714285714 2.319999999999709 57.14285714285714 2.319999999999709C 62.14285714285714 2.319999999999709 66.42857142857142 25.519999999999527 71.42857142857142 25.519999999999527C 76.42857142857142 25.519999999999527 80.71428571428571 41.75999999999931 85.71428571428571 41.75999999999931C 90.71428571428571 41.75999999999931 94.99999999999999 54.51999999999953 99.99999999999999 54.51999999999953C 99.99999999999999 54.51999999999953 99.99999999999999 54.51999999999953 99.99999999999999 58 L 0 58z"
                                                                        pathFrom="M 0 4297.799999999999 L 0 4297.799999999999 L 14.285714285714285 4297.799999999999 L 28.57142857142857 4297.799999999999 L 42.857142857142854 4297.799999999999 L 57.14285714285714 4297.799999999999 L 71.42857142857142 4297.799999999999 L 85.71428571428571 4297.799999999999 L 99.99999999999999 4297.799999999999 L 0 4297.799999999999">
                                                                    </path>
                                                                    <path id="SvgjsPath3134"
                                                                        d="M0 25.519999999999527C4.999999999999999 25.519999999999527 9.285714285714285 18.55999999999949 14.285714285714285 18.55999999999949C19.285714285714285 18.55999999999949 23.57142857142857 32.47999999999956 28.57142857142857 32.47999999999956C33.57142857142857 32.47999999999956 37.857142857142854 8.11999999999989 42.857142857142854 8.11999999999989C47.857142857142854 8.11999999999989 52.14285714285714 2.319999999999709 57.14285714285714 2.319999999999709C62.14285714285714 2.319999999999709 66.42857142857142 25.519999999999527 71.42857142857142 25.519999999999527C76.42857142857142 25.519999999999527 80.71428571428571 41.75999999999931 85.71428571428571 41.75999999999931C90.71428571428571 41.75999999999931 94.99999999999999 54.51999999999953 99.99999999999999 54.51999999999953C99.99999999999999 54.51999999999953 99.99999999999999 54.51999999999953 99.99999999999999 54.51999999999953 "
                                                                        fill="none" fill-opacity="1"
                                                                        stroke="#ffffff" stroke-opacity="1"
                                                                        stroke-linecap="butt" stroke-width="2"
                                                                        stroke-dasharray="0" class="apexcharts-area"
                                                                        index="0"
                                                                        clip-path="url(#gridRectMask99cpvpge)"
                                                                        pathTo="M 0 25.519999999999527C 4.999999999999999 25.519999999999527 9.285714285714285 18.55999999999949 14.285714285714285 18.55999999999949C 19.285714285714285 18.55999999999949 23.57142857142857 32.47999999999956 28.57142857142857 32.47999999999956C 33.57142857142857 32.47999999999956 37.857142857142854 8.11999999999989 42.857142857142854 8.11999999999989C 47.857142857142854 8.11999999999989 52.14285714285714 2.319999999999709 57.14285714285714 2.319999999999709C 62.14285714285714 2.319999999999709 66.42857142857142 25.519999999999527 71.42857142857142 25.519999999999527C 76.42857142857142 25.519999999999527 80.71428571428571 41.75999999999931 85.71428571428571 41.75999999999931C 90.71428571428571 41.75999999999931 94.99999999999999 54.51999999999953 99.99999999999999 54.51999999999953"
                                                                        pathFrom="M 0 4297.799999999999 L 0 4297.799999999999 L 14.285714285714285 4297.799999999999 L 28.57142857142857 4297.799999999999 L 42.857142857142854 4297.799999999999 L 57.14285714285714 4297.799999999999 L 71.42857142857142 4297.799999999999 L 85.71428571428571 4297.799999999999 L 99.99999999999999 4297.799999999999"
                                                                        fill-rule="evenodd"></path>
                                                                    <g id="SvgjsG3127"
                                                                        class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown"
                                                                        data:realIndex="0">
                                                                        <g class="apexcharts-series-markers">
                                                                            <circle id="SvgjsCircle3159" r="0"
                                                                                cx="0" cy="0"
                                                                                class="apexcharts-marker wq1aifm8t no-pointer-events"
                                                                                stroke="#ffffff" fill="#ffffff"
                                                                                fill-opacity="1" stroke-width="2"
                                                                                stroke-opacity="0.9"
                                                                                default-marker-size="0"></circle>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                                <g id="SvgjsG3128" class="apexcharts-datalabels"
                                                                    data:realIndex="0"></g>
                                                            </g>
                                                            <line id="SvgjsLine3143" x1="0" y1="0"
                                                                x2="100" y2="0" stroke="#b6b6b6"
                                                                stroke-dasharray="0" stroke-width="1"
                                                                stroke-linecap="butt"
                                                                class="apexcharts-ycrosshairs"></line>
                                                            <line id="SvgjsLine3144" x1="0" y1="0"
                                                                x2="100" y2="0" stroke-dasharray="0"
                                                                stroke-width="0" stroke-linecap="butt"
                                                                class="apexcharts-ycrosshairs-hidden"></line>
                                                            <g id="SvgjsG3145" class="apexcharts-xaxis"
                                                                transform="translate(0, 0)">
                                                                <g id="SvgjsG3146" class="apexcharts-xaxis-texts-g"
                                                                    transform="translate(0, -4)"></g>
                                                            </g>
                                                            <g id="SvgjsG3156"
                                                                class="apexcharts-yaxis-annotations apexcharts-hidden-element-shown">
                                                            </g>
                                                            <g id="SvgjsG3157"
                                                                class="apexcharts-xaxis-annotations apexcharts-hidden-element-shown">
                                                            </g>
                                                            <g id="SvgjsG3158"
                                                                class="apexcharts-point-annotations apexcharts-hidden-element-shown">
                                                            </g>
                                                        </g>
                                                    </svg>
                                                    <div class="apexcharts-tooltip apexcharts-theme-light">
                                                        <div class="apexcharts-tooltip-series-group"
                                                            style="order: 1;"><span
                                                                class="apexcharts-tooltip-marker"
                                                                style="background-color: rgb(255, 255, 255);"></span>
                                                            <div class="apexcharts-tooltip-text"
                                                                style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                                <div class="apexcharts-tooltip-y-group"><span
                                                                        class="apexcharts-tooltip-text-y-label"></span><span
                                                                        class="apexcharts-tooltip-text-y-value"></span>
                                                                </div>
                                                                <div class="apexcharts-tooltip-goals-group"><span
                                                                        class="apexcharts-tooltip-text-goals-label"></span><span
                                                                        class="apexcharts-tooltip-text-goals-value"></span>
                                                                </div>
                                                                <div class="apexcharts-tooltip-z-group"><span
                                                                        class="apexcharts-tooltip-text-z-label"></span><span
                                                                        class="apexcharts-tooltip-text-z-value"></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                                        <div class="apexcharts-yaxistooltip-text"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-link col-lg-3 col-md-3 col-sm-12 price-item price-down"
                                    data-komoditas-id="105"
                                    style="--bg-img: url('https://panelharga.badanpangan.go.id/src/assets/img/komoditas-ikon/ikan-tongkol.png');"
                                    onclick="checkDetails(this)">
                                    <div
                                        style="display:flex;flex-direction:column;justify-content:space-between;align-items:flex-start;height:100%;">
                                        <span class="price-item-title">Ikan Tongkol</span>
                                        <div
                                            style="display:flex;justify-content:space-between;align-items:flex-end;width:100%;">
                                            <div style="margin-right:12px;font-size:13px;">
                                                <span class="price-item-price"
                                                    style="background-color:transparent;">
                                                    Rp 31.310
                                                </span>
                                                <span class="price-item-per">Rp./Kg</span>
                                                <span class="price-item-increment"
                                                    style="background-color:#ff0000;padding:0px 5px;border-radius:5px;">
                                                    <i class="fa-solid fa-arrow-up" style="margin-right: 4px"></i>
                                                    0.51% - Rp 160
                                                </span>
                                            </div>
                                            <div class="chart" id="chart-105" style="min-height: 60px;">
                                                <div id="apexchartssi795nz7"
                                                    class="apexcharts-canvas apexchartssi795nz7 apexcharts-theme-light"
                                                    style="width: 100px; height: 60px;"><svg id="SvgjsSvg3160"
                                                        width="100" height="60"
                                                        xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                                        xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg"
                                                        xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                                        style="background: transparent;">
                                                        <foreignObject x="0" y="0" width="100" height="60">
                                                            <div class="apexcharts-legend"
                                                                xmlns="http://www.w3.org/1999/xhtml"
                                                                style="max-height: 30px;"></div>
                                                        </foreignObject>
                                                        <rect id="SvgjsRect3164" width="0" height="0"
                                                            x="0" y="0" rx="0" ry="0"
                                                            opacity="1" stroke-width="0" stroke="none"
                                                            stroke-dasharray="0" fill="#fefefe"></rect>
                                                        <g id="SvgjsG3198" class="apexcharts-yaxis" rel="0"
                                                            transform="translate(-18, 0)"></g>
                                                        <g id="SvgjsG3162"
                                                            class="apexcharts-inner apexcharts-graphical"
                                                            transform="translate(0, 1)">
                                                            <defs id="SvgjsDefs3161">
                                                                <clipPath id="gridRectMasksi795nz7">
                                                                    <rect id="SvgjsRect3166" width="106"
                                                                        height="64" x="-3" y="-3" rx="0"
                                                                        ry="0" opacity="1"
                                                                        stroke-width="0" stroke="none"
                                                                        stroke-dasharray="0" fill="#fff"></rect>
                                                                </clipPath>
                                                                <clipPath id="forecastMasksi795nz7"></clipPath>
                                                                <clipPath id="nonForecastMasksi795nz7"></clipPath>
                                                                <clipPath id="gridRectMarkerMasksi795nz7">
                                                                    <rect id="SvgjsRect3167" width="104"
                                                                        height="62" x="-2" y="-2" rx="0"
                                                                        ry="0" opacity="1"
                                                                        stroke-width="0" stroke="none"
                                                                        stroke-dasharray="0" fill="#fff"></rect>
                                                                </clipPath>
                                                                <linearGradient id="SvgjsLinearGradient3172"
                                                                    x1="0" y1="0" x2="0"
                                                                    y2="1">
                                                                    <stop id="SvgjsStop3173" stop-opacity="0.65"
                                                                        stop-color="rgba(255,255,255,0.65)"
                                                                        offset="0"></stop>
                                                                    <stop id="SvgjsStop3174" stop-opacity="0.5"
                                                                        stop-color="rgba(128,135,255,0.5)"
                                                                        offset="1"></stop>
                                                                    <stop id="SvgjsStop3175" stop-opacity="0.5"
                                                                        stop-color="rgba(128,135,255,0.5)"
                                                                        offset="1"></stop>
                                                                </linearGradient>
                                                            </defs>
                                                            <line id="SvgjsLine3165" x1="0" y1="0"
                                                                x2="0" y2="58" stroke="#b6b6b6"
                                                                stroke-dasharray="3" stroke-linecap="butt"
                                                                class="apexcharts-xcrosshairs" x="0" y="0"
                                                                width="1" height="58" fill="#b1b9c4"
                                                                filter="none" fill-opacity="0.9"
                                                                stroke-width="1"></line>
                                                            <g id="SvgjsG3178" class="apexcharts-grid">
                                                                <g id="SvgjsG3179"
                                                                    class="apexcharts-gridlines-horizontal"
                                                                    style="display: none;">
                                                                    <line id="SvgjsLine3182" x1="0"
                                                                        y1="0" x2="100"
                                                                        y2="0" stroke="#e0e0e0"
                                                                        stroke-dasharray="0" stroke-linecap="butt"
                                                                        class="apexcharts-gridline"></line>
                                                                    <line id="SvgjsLine3183" x1="0"
                                                                        y1="58" x2="100"
                                                                        y2="58" stroke="#e0e0e0"
                                                                        stroke-dasharray="0" stroke-linecap="butt"
                                                                        class="apexcharts-gridline"></line>
                                                                </g>
                                                                <g id="SvgjsG3180"
                                                                    class="apexcharts-gridlines-vertical"
                                                                    style="display: none;"></g>
                                                                <line id="SvgjsLine3185" x1="0"
                                                                    y1="58" x2="100" y2="58"
                                                                    stroke="transparent" stroke-dasharray="0"
                                                                    stroke-linecap="butt"></line>
                                                                <line id="SvgjsLine3184" x1="0"
                                                                    y1="1" x2="0" y2="58"
                                                                    stroke="transparent" stroke-dasharray="0"
                                                                    stroke-linecap="butt"></line>
                                                            </g>
                                                            <g id="SvgjsG3181" class="apexcharts-grid-borders"
                                                                style="display: none;"></g>
                                                            <g id="SvgjsG3168"
                                                                class="apexcharts-area-series apexcharts-plot-series">
                                                                <g id="SvgjsG3169" class="apexcharts-series"
                                                                    zIndex="0" seriesName="series-1"
                                                                    data:longestSeries="true" rel="1"
                                                                    data:realIndex="0">
                                                                    <path id="SvgjsPath3176"
                                                                        d="M0 54.836363636363785C4.999999999999999 54.836363636363785 9.285714285714285 8.436363636363694 14.285714285714285 8.436363636363694C19.285714285714285 8.436363636363694 23.57142857142857 44.29090909090928 28.57142857142857 44.29090909090928C33.57142857142857 44.29090909090928 37.857142857142854 3.1636363636366696 42.857142857142854 3.1636363636366696C47.857142857142854 3.1636363636366696 52.14285714285714 26.363636363636488 57.14285714285714 26.363636363636488C62.14285714285714 26.363636363636488 66.42857142857142 11.600000000000364 71.42857142857142 11.600000000000364C76.42857142857142 11.600000000000364 80.71428571428571 52.727272727272975 85.71428571428571 52.727272727272975C90.71428571428571 52.727272727272975 94.99999999999999 35.85454545454559 99.99999999999999 35.85454545454559C99.99999999999999 35.85454545454559 99.99999999999999 35.85454545454559 99.99999999999999 58L0 58C0 58 0 54.836363636363785 0 54.836363636363785 "
                                                                        fill="url(#SvgjsLinearGradient3172)"
                                                                        fill-opacity="1" stroke-opacity="1"
                                                                        stroke-linecap="butt" stroke-width="0"
                                                                        stroke-dasharray="0" class="apexcharts-area"
                                                                        index="0"
                                                                        clip-path="url(#gridRectMasksi795nz7)"
                                                                        pathTo="M 0 54.836363636363785C 4.999999999999999 54.836363636363785 9.285714285714285 8.436363636363694 14.285714285714285 8.436363636363694C 19.285714285714285 8.436363636363694 23.57142857142857 44.29090909090928 28.57142857142857 44.29090909090928C 33.57142857142857 44.29090909090928 37.857142857142854 3.1636363636366696 42.857142857142854 3.1636363636366696C 47.857142857142854 3.1636363636366696 52.14285714285714 26.363636363636488 57.14285714285714 26.363636363636488C 62.14285714285714 26.363636363636488 66.42857142857142 11.600000000000364 71.42857142857142 11.600000000000364C 76.42857142857142 11.600000000000364 80.71428571428571 52.727272727272975 85.71428571428571 52.727272727272975C 90.71428571428571 52.727272727272975 94.99999999999999 35.85454545454559 99.99999999999999 35.85454545454559C 99.99999999999999 35.85454545454559 99.99999999999999 35.85454545454559 99.99999999999999 58 L 0 58z"
                                                                        pathFrom="M 0 3337.636363636364 L 0 3337.636363636364 L 14.285714285714285 3337.636363636364 L 28.57142857142857 3337.636363636364 L 42.857142857142854 3337.636363636364 L 57.14285714285714 3337.636363636364 L 71.42857142857142 3337.636363636364 L 85.71428571428571 3337.636363636364 L 99.99999999999999 3337.636363636364 L 0 3337.636363636364">
                                                                    </path>
                                                                    <path id="SvgjsPath3177"
                                                                        d="M0 54.836363636363785C4.999999999999999 54.836363636363785 9.285714285714285 8.436363636363694 14.285714285714285 8.436363636363694C19.285714285714285 8.436363636363694 23.57142857142857 44.29090909090928 28.57142857142857 44.29090909090928C33.57142857142857 44.29090909090928 37.857142857142854 3.1636363636366696 42.857142857142854 3.1636363636366696C47.857142857142854 3.1636363636366696 52.14285714285714 26.363636363636488 57.14285714285714 26.363636363636488C62.14285714285714 26.363636363636488 66.42857142857142 11.600000000000364 71.42857142857142 11.600000000000364C76.42857142857142 11.600000000000364 80.71428571428571 52.727272727272975 85.71428571428571 52.727272727272975C90.71428571428571 52.727272727272975 94.99999999999999 35.85454545454559 99.99999999999999 35.85454545454559C99.99999999999999 35.85454545454559 99.99999999999999 35.85454545454559 99.99999999999999 35.85454545454559 "
                                                                        fill="none" fill-opacity="1"
                                                                        stroke="#ffffff" stroke-opacity="1"
                                                                        stroke-linecap="butt" stroke-width="2"
                                                                        stroke-dasharray="0" class="apexcharts-area"
                                                                        index="0"
                                                                        clip-path="url(#gridRectMasksi795nz7)"
                                                                        pathTo="M 0 54.836363636363785C 4.999999999999999 54.836363636363785 9.285714285714285 8.436363636363694 14.285714285714285 8.436363636363694C 19.285714285714285 8.436363636363694 23.57142857142857 44.29090909090928 28.57142857142857 44.29090909090928C 33.57142857142857 44.29090909090928 37.857142857142854 3.1636363636366696 42.857142857142854 3.1636363636366696C 47.857142857142854 3.1636363636366696 52.14285714285714 26.363636363636488 57.14285714285714 26.363636363636488C 62.14285714285714 26.363636363636488 66.42857142857142 11.600000000000364 71.42857142857142 11.600000000000364C 76.42857142857142 11.600000000000364 80.71428571428571 52.727272727272975 85.71428571428571 52.727272727272975C 90.71428571428571 52.727272727272975 94.99999999999999 35.85454545454559 99.99999999999999 35.85454545454559"
                                                                        pathFrom="M 0 3337.636363636364 L 0 3337.636363636364 L 14.285714285714285 3337.636363636364 L 28.57142857142857 3337.636363636364 L 42.857142857142854 3337.636363636364 L 57.14285714285714 3337.636363636364 L 71.42857142857142 3337.636363636364 L 85.71428571428571 3337.636363636364 L 99.99999999999999 3337.636363636364"
                                                                        fill-rule="evenodd"></path>
                                                                    <g id="SvgjsG3170"
                                                                        class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown"
                                                                        data:realIndex="0">
                                                                        <g class="apexcharts-series-markers">
                                                                            <circle id="SvgjsCircle3202" r="0"
                                                                                cx="0" cy="0"
                                                                                class="apexcharts-marker wv9c03a64 no-pointer-events"
                                                                                stroke="#ffffff" fill="#ffffff"
                                                                                fill-opacity="1" stroke-width="2"
                                                                                stroke-opacity="0.9"
                                                                                default-marker-size="0"></circle>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                                <g id="SvgjsG3171" class="apexcharts-datalabels"
                                                                    data:realIndex="0"></g>
                                                            </g>
                                                            <line id="SvgjsLine3186" x1="0" y1="0"
                                                                x2="100" y2="0" stroke="#b6b6b6"
                                                                stroke-dasharray="0" stroke-width="1"
                                                                stroke-linecap="butt"
                                                                class="apexcharts-ycrosshairs"></line>
                                                            <line id="SvgjsLine3187" x1="0" y1="0"
                                                                x2="100" y2="0" stroke-dasharray="0"
                                                                stroke-width="0" stroke-linecap="butt"
                                                                class="apexcharts-ycrosshairs-hidden"></line>
                                                            <g id="SvgjsG3188" class="apexcharts-xaxis"
                                                                transform="translate(0, 0)">
                                                                <g id="SvgjsG3189" class="apexcharts-xaxis-texts-g"
                                                                    transform="translate(0, -4)"></g>
                                                            </g>
                                                            <g id="SvgjsG3199"
                                                                class="apexcharts-yaxis-annotations apexcharts-hidden-element-shown">
                                                            </g>
                                                            <g id="SvgjsG3200"
                                                                class="apexcharts-xaxis-annotations apexcharts-hidden-element-shown">
                                                            </g>
                                                            <g id="SvgjsG3201"
                                                                class="apexcharts-point-annotations apexcharts-hidden-element-shown">
                                                            </g>
                                                        </g>
                                                    </svg>
                                                    <div class="apexcharts-tooltip apexcharts-theme-light">
                                                        <div class="apexcharts-tooltip-series-group"
                                                            style="order: 1;"><span
                                                                class="apexcharts-tooltip-marker"
                                                                style="background-color: rgb(255, 255, 255);"></span>
                                                            <div class="apexcharts-tooltip-text"
                                                                style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                                <div class="apexcharts-tooltip-y-group"><span
                                                                        class="apexcharts-tooltip-text-y-label"></span><span
                                                                        class="apexcharts-tooltip-text-y-value"></span>
                                                                </div>
                                                                <div class="apexcharts-tooltip-goals-group"><span
                                                                        class="apexcharts-tooltip-text-goals-label"></span><span
                                                                        class="apexcharts-tooltip-text-goals-value"></span>
                                                                </div>
                                                                <div class="apexcharts-tooltip-z-group"><span
                                                                        class="apexcharts-tooltip-text-z-label"></span><span
                                                                        class="apexcharts-tooltip-text-z-value"></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                                        <div class="apexcharts-yaxistooltip-text"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-link col-lg-3 col-md-3 col-sm-12 price-item price-down"
                                    data-komoditas-id="106"
                                    style="--bg-img: url('https://panelharga.badanpangan.go.id/src/assets/img/komoditas-ikon/ikan-bandeng.png');"
                                    onclick="checkDetails(this)">
                                    <div
                                        style="display:flex;flex-direction:column;justify-content:space-between;align-items:flex-start;height:100%;">
                                        <span class="price-item-title">Ikan Bandeng</span>
                                        <div
                                            style="display:flex;justify-content:space-between;align-items:flex-end;width:100%;">
                                            <div style="margin-right:12px;font-size:13px;">
                                                <span class="price-item-price"
                                                    style="background-color:transparent;">
                                                    Rp 33.400
                                                </span>
                                                <span class="price-item-per">Rp./Kg</span>
                                                <span class="price-item-increment"
                                                    style="background-color:#ff0000;padding:0px 5px;border-radius:5px;">
                                                    <i class="fa-solid fa-arrow-up" style="margin-right: 4px"></i>
                                                    1.33% - Rp 440
                                                </span>
                                            </div>
                                            <div class="chart" id="chart-106" style="min-height: 60px;">
                                                <div id="apexcharts5lbs7ttf"
                                                    class="apexcharts-canvas apexcharts5lbs7ttf apexcharts-theme-light"
                                                    style="width: 100px; height: 60px;"><svg id="SvgjsSvg3203"
                                                        width="100" height="60"
                                                        xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                                        xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg"
                                                        xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                                        style="background: transparent;">
                                                        <foreignObject x="0" y="0" width="100" height="60">
                                                            <div class="apexcharts-legend"
                                                                xmlns="http://www.w3.org/1999/xhtml"
                                                                style="max-height: 30px;"></div>
                                                        </foreignObject>
                                                        <rect id="SvgjsRect3207" width="0" height="0"
                                                            x="0" y="0" rx="0" ry="0"
                                                            opacity="1" stroke-width="0" stroke="none"
                                                            stroke-dasharray="0" fill="#fefefe"></rect>
                                                        <g id="SvgjsG3241" class="apexcharts-yaxis" rel="0"
                                                            transform="translate(-18, 0)"></g>
                                                        <g id="SvgjsG3205"
                                                            class="apexcharts-inner apexcharts-graphical"
                                                            transform="translate(0, 1)">
                                                            <defs id="SvgjsDefs3204">
                                                                <clipPath id="gridRectMask5lbs7ttf">
                                                                    <rect id="SvgjsRect3209" width="106"
                                                                        height="64" x="-3" y="-3" rx="0"
                                                                        ry="0" opacity="1"
                                                                        stroke-width="0" stroke="none"
                                                                        stroke-dasharray="0" fill="#fff"></rect>
                                                                </clipPath>
                                                                <clipPath id="forecastMask5lbs7ttf"></clipPath>
                                                                <clipPath id="nonForecastMask5lbs7ttf"></clipPath>
                                                                <clipPath id="gridRectMarkerMask5lbs7ttf">
                                                                    <rect id="SvgjsRect3210" width="104"
                                                                        height="62" x="-2" y="-2" rx="0"
                                                                        ry="0" opacity="1"
                                                                        stroke-width="0" stroke="none"
                                                                        stroke-dasharray="0" fill="#fff"></rect>
                                                                </clipPath>
                                                                <linearGradient id="SvgjsLinearGradient3215"
                                                                    x1="0" y1="0" x2="0"
                                                                    y2="1">
                                                                    <stop id="SvgjsStop3216" stop-opacity="0.65"
                                                                        stop-color="rgba(255,255,255,0.65)"
                                                                        offset="0"></stop>
                                                                    <stop id="SvgjsStop3217" stop-opacity="0.5"
                                                                        stop-color="rgba(128,135,255,0.5)"
                                                                        offset="1"></stop>
                                                                    <stop id="SvgjsStop3218" stop-opacity="0.5"
                                                                        stop-color="rgba(128,135,255,0.5)"
                                                                        offset="1"></stop>
                                                                </linearGradient>
                                                            </defs>
                                                            <line id="SvgjsLine3208" x1="0" y1="0"
                                                                x2="0" y2="58" stroke="#b6b6b6"
                                                                stroke-dasharray="3" stroke-linecap="butt"
                                                                class="apexcharts-xcrosshairs" x="0" y="0"
                                                                width="1" height="58" fill="#b1b9c4"
                                                                filter="none" fill-opacity="0.9"
                                                                stroke-width="1"></line>
                                                            <g id="SvgjsG3221" class="apexcharts-grid">
                                                                <g id="SvgjsG3222"
                                                                    class="apexcharts-gridlines-horizontal"
                                                                    style="display: none;">
                                                                    <line id="SvgjsLine3225" x1="0"
                                                                        y1="0" x2="100"
                                                                        y2="0" stroke="#e0e0e0"
                                                                        stroke-dasharray="0" stroke-linecap="butt"
                                                                        class="apexcharts-gridline"></line>
                                                                    <line id="SvgjsLine3226" x1="0"
                                                                        y1="58" x2="100"
                                                                        y2="58" stroke="#e0e0e0"
                                                                        stroke-dasharray="0" stroke-linecap="butt"
                                                                        class="apexcharts-gridline"></line>
                                                                </g>
                                                                <g id="SvgjsG3223"
                                                                    class="apexcharts-gridlines-vertical"
                                                                    style="display: none;"></g>
                                                                <line id="SvgjsLine3228" x1="0"
                                                                    y1="58" x2="100" y2="58"
                                                                    stroke="transparent" stroke-dasharray="0"
                                                                    stroke-linecap="butt"></line>
                                                                <line id="SvgjsLine3227" x1="0"
                                                                    y1="1" x2="0" y2="58"
                                                                    stroke="transparent" stroke-dasharray="0"
                                                                    stroke-linecap="butt"></line>
                                                            </g>
                                                            <g id="SvgjsG3224" class="apexcharts-grid-borders"
                                                                style="display: none;"></g>
                                                            <g id="SvgjsG3211"
                                                                class="apexcharts-area-series apexcharts-plot-series">
                                                                <g id="SvgjsG3212" class="apexcharts-series"
                                                                    zIndex="0" seriesName="series-1"
                                                                    data:longestSeries="true" rel="1"
                                                                    data:realIndex="0">
                                                                    <path id="SvgjsPath3219"
                                                                        d="M0 44.08000000000038C4.999999999999999 44.08000000000038 9.285714285714285 1.1600000000003092 14.285714285714285 1.1600000000003092C19.285714285714285 1.1600000000003092 23.57142857142857 27.840000000000146 28.57142857142857 27.840000000000146C33.57142857142857 27.840000000000146 37.857142857142854 5.800000000000182 42.857142857142854 5.800000000000182C47.857142857142854 5.800000000000182 52.14285714285714 52.20000000000027 57.14285714285714 52.20000000000027C62.14285714285714 52.20000000000027 66.42857142857142 29 71.42857142857142 29C76.42857142857142 29 80.71428571428571 56.840000000000146 85.71428571428571 56.840000000000146C90.71428571428571 56.840000000000146 94.99999999999999 5.800000000000182 99.99999999999999 5.800000000000182C99.99999999999999 5.800000000000182 99.99999999999999 5.800000000000182 99.99999999999999 58L0 58C0 58 0 44.08000000000038 0 44.08000000000038 "
                                                                        fill="url(#SvgjsLinearGradient3215)"
                                                                        fill-opacity="1" stroke-opacity="1"
                                                                        stroke-linecap="butt" stroke-width="0"
                                                                        stroke-dasharray="0" class="apexcharts-area"
                                                                        index="0"
                                                                        clip-path="url(#gridRectMask5lbs7ttf)"
                                                                        pathTo="M 0 44.08000000000038C 4.999999999999999 44.08000000000038 9.285714285714285 1.1600000000003092 14.285714285714285 1.1600000000003092C 19.285714285714285 1.1600000000003092 23.57142857142857 27.840000000000146 28.57142857142857 27.840000000000146C 33.57142857142857 27.840000000000146 37.857142857142854 5.800000000000182 42.857142857142854 5.800000000000182C 47.857142857142854 5.800000000000182 52.14285714285714 52.20000000000027 57.14285714285714 52.20000000000027C 62.14285714285714 52.20000000000027 66.42857142857142 29 71.42857142857142 29C 76.42857142857142 29 80.71428571428571 56.840000000000146 85.71428571428571 56.840000000000146C 90.71428571428571 56.840000000000146 94.99999999999999 5.800000000000182 99.99999999999999 5.800000000000182C 99.99999999999999 5.800000000000182 99.99999999999999 5.800000000000182 99.99999999999999 58 L 0 58z"
                                                                        pathFrom="M 0 3880.2 L 0 3880.2 L 14.285714285714285 3880.2 L 28.57142857142857 3880.2 L 42.857142857142854 3880.2 L 57.14285714285714 3880.2 L 71.42857142857142 3880.2 L 85.71428571428571 3880.2 L 99.99999999999999 3880.2 L 0 3880.2">
                                                                    </path>
                                                                    <path id="SvgjsPath3220"
                                                                        d="M0 44.08000000000038C4.999999999999999 44.08000000000038 9.285714285714285 1.1600000000003092 14.285714285714285 1.1600000000003092C19.285714285714285 1.1600000000003092 23.57142857142857 27.840000000000146 28.57142857142857 27.840000000000146C33.57142857142857 27.840000000000146 37.857142857142854 5.800000000000182 42.857142857142854 5.800000000000182C47.857142857142854 5.800000000000182 52.14285714285714 52.20000000000027 57.14285714285714 52.20000000000027C62.14285714285714 52.20000000000027 66.42857142857142 29 71.42857142857142 29C76.42857142857142 29 80.71428571428571 56.840000000000146 85.71428571428571 56.840000000000146C90.71428571428571 56.840000000000146 94.99999999999999 5.800000000000182 99.99999999999999 5.800000000000182C99.99999999999999 5.800000000000182 99.99999999999999 5.800000000000182 99.99999999999999 5.800000000000182 "
                                                                        fill="none" fill-opacity="1"
                                                                        stroke="#ffffff" stroke-opacity="1"
                                                                        stroke-linecap="butt" stroke-width="2"
                                                                        stroke-dasharray="0" class="apexcharts-area"
                                                                        index="0"
                                                                        clip-path="url(#gridRectMask5lbs7ttf)"
                                                                        pathTo="M 0 44.08000000000038C 4.999999999999999 44.08000000000038 9.285714285714285 1.1600000000003092 14.285714285714285 1.1600000000003092C 19.285714285714285 1.1600000000003092 23.57142857142857 27.840000000000146 28.57142857142857 27.840000000000146C 33.57142857142857 27.840000000000146 37.857142857142854 5.800000000000182 42.857142857142854 5.800000000000182C 47.857142857142854 5.800000000000182 52.14285714285714 52.20000000000027 57.14285714285714 52.20000000000027C 62.14285714285714 52.20000000000027 66.42857142857142 29 71.42857142857142 29C 76.42857142857142 29 80.71428571428571 56.840000000000146 85.71428571428571 56.840000000000146C 90.71428571428571 56.840000000000146 94.99999999999999 5.800000000000182 99.99999999999999 5.800000000000182"
                                                                        pathFrom="M 0 3880.2 L 0 3880.2 L 14.285714285714285 3880.2 L 28.57142857142857 3880.2 L 42.857142857142854 3880.2 L 57.14285714285714 3880.2 L 71.42857142857142 3880.2 L 85.71428571428571 3880.2 L 99.99999999999999 3880.2"
                                                                        fill-rule="evenodd"></path>
                                                                    <g id="SvgjsG3213"
                                                                        class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown"
                                                                        data:realIndex="0">
                                                                        <g class="apexcharts-series-markers">
                                                                            <circle id="SvgjsCircle3245" r="0"
                                                                                cx="0" cy="0"
                                                                                class="apexcharts-marker wadmv8dzci no-pointer-events"
                                                                                stroke="#ffffff" fill="#ffffff"
                                                                                fill-opacity="1" stroke-width="2"
                                                                                stroke-opacity="0.9"
                                                                                default-marker-size="0"></circle>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                                <g id="SvgjsG3214" class="apexcharts-datalabels"
                                                                    data:realIndex="0"></g>
                                                            </g>
                                                            <line id="SvgjsLine3229" x1="0" y1="0"
                                                                x2="100" y2="0" stroke="#b6b6b6"
                                                                stroke-dasharray="0" stroke-width="1"
                                                                stroke-linecap="butt"
                                                                class="apexcharts-ycrosshairs"></line>
                                                            <line id="SvgjsLine3230" x1="0" y1="0"
                                                                x2="100" y2="0" stroke-dasharray="0"
                                                                stroke-width="0" stroke-linecap="butt"
                                                                class="apexcharts-ycrosshairs-hidden"></line>
                                                            <g id="SvgjsG3231" class="apexcharts-xaxis"
                                                                transform="translate(0, 0)">
                                                                <g id="SvgjsG3232" class="apexcharts-xaxis-texts-g"
                                                                    transform="translate(0, -4)"></g>
                                                            </g>
                                                            <g id="SvgjsG3242"
                                                                class="apexcharts-yaxis-annotations apexcharts-hidden-element-shown">
                                                            </g>
                                                            <g id="SvgjsG3243"
                                                                class="apexcharts-xaxis-annotations apexcharts-hidden-element-shown">
                                                            </g>
                                                            <g id="SvgjsG3244"
                                                                class="apexcharts-point-annotations apexcharts-hidden-element-shown">
                                                            </g>
                                                        </g>
                                                    </svg>
                                                    <div class="apexcharts-tooltip apexcharts-theme-light">
                                                        <div class="apexcharts-tooltip-series-group"
                                                            style="order: 1;"><span
                                                                class="apexcharts-tooltip-marker"
                                                                style="background-color: rgb(255, 255, 255);"></span>
                                                            <div class="apexcharts-tooltip-text"
                                                                style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                                <div class="apexcharts-tooltip-y-group"><span
                                                                        class="apexcharts-tooltip-text-y-label"></span><span
                                                                        class="apexcharts-tooltip-text-y-value"></span>
                                                                </div>
                                                                <div class="apexcharts-tooltip-goals-group"><span
                                                                        class="apexcharts-tooltip-text-goals-label"></span><span
                                                                        class="apexcharts-tooltip-text-goals-value"></span>
                                                                </div>
                                                                <div class="apexcharts-tooltip-z-group"><span
                                                                        class="apexcharts-tooltip-text-z-label"></span><span
                                                                        class="apexcharts-tooltip-text-z-value"></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                                        <div class="apexcharts-yaxistooltip-text"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-link col-lg-3 col-md-3 col-sm-12 price-item price-draw"
                                    data-komoditas-id="107" false="" onclick="checkDetails(this)">
                                    <div
                                        style="display:flex;flex-direction:column;justify-content:space-between;align-items:flex-start;height:100%;">
                                        <span class="price-item-title">Garam Halus Beryodium</span>
                                        <div
                                            style="display:flex;justify-content:space-between;align-items:flex-end;width:100%;">
                                            <div style="margin-right:12px;font-size:13px;">
                                                <span class="price-item-price"
                                                    style="background-color:transparent;">
                                                    Rp 11.500
                                                </span>
                                                <span class="price-item-per">Rp/kg</span>
                                                <span class="price-item-increment"
                                                    style="background-color:#1671bd;padding:0px 5px;border-radius:5px;">
                                                    <i class="fa-solid fa-minus" style="margin-right: 4px"></i>
                                                    0.00% - Rp 0
                                                </span>
                                            </div>
                                            <div class="chart" id="chart-107" style="min-height: 60px;">
                                                <div id="apexchartsp885fx8d"
                                                    class="apexcharts-canvas apexchartsp885fx8d apexcharts-theme-light"
                                                    style="width: 100px; height: 60px;"><svg id="SvgjsSvg3246"
                                                        width="100" height="60"
                                                        xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                                        xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg"
                                                        xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                                        style="background: transparent;">
                                                        <foreignObject x="0" y="0" width="100" height="60">
                                                            <div class="apexcharts-legend"
                                                                xmlns="http://www.w3.org/1999/xhtml"
                                                                style="max-height: 30px;"></div>
                                                        </foreignObject>
                                                        <rect id="SvgjsRect3250" width="0" height="0"
                                                            x="0" y="0" rx="0" ry="0"
                                                            opacity="1" stroke-width="0" stroke="none"
                                                            stroke-dasharray="0" fill="#fefefe"></rect>
                                                        <g id="SvgjsG3284" class="apexcharts-yaxis" rel="0"
                                                            transform="translate(-18, 0)"></g>
                                                        <g id="SvgjsG3248"
                                                            class="apexcharts-inner apexcharts-graphical"
                                                            transform="translate(0, 1)">
                                                            <defs id="SvgjsDefs3247">
                                                                <clipPath id="gridRectMaskp885fx8d">
                                                                    <rect id="SvgjsRect3252" width="106"
                                                                        height="64" x="-3" y="-3" rx="0"
                                                                        ry="0" opacity="1"
                                                                        stroke-width="0" stroke="none"
                                                                        stroke-dasharray="0" fill="#fff"></rect>
                                                                </clipPath>
                                                                <clipPath id="forecastMaskp885fx8d"></clipPath>
                                                                <clipPath id="nonForecastMaskp885fx8d"></clipPath>
                                                                <clipPath id="gridRectMarkerMaskp885fx8d">
                                                                    <rect id="SvgjsRect3253" width="104"
                                                                        height="62" x="-2" y="-2" rx="0"
                                                                        ry="0" opacity="1"
                                                                        stroke-width="0" stroke="none"
                                                                        stroke-dasharray="0" fill="#fff"></rect>
                                                                </clipPath>
                                                                <linearGradient id="SvgjsLinearGradient3258"
                                                                    x1="0" y1="0" x2="0"
                                                                    y2="1">
                                                                    <stop id="SvgjsStop3259" stop-opacity="0.65"
                                                                        stop-color="rgba(255,255,255,0.65)"
                                                                        offset="0"></stop>
                                                                    <stop id="SvgjsStop3260" stop-opacity="0.5"
                                                                        stop-color="rgba(128,135,255,0.5)"
                                                                        offset="1"></stop>
                                                                    <stop id="SvgjsStop3261" stop-opacity="0.5"
                                                                        stop-color="rgba(128,135,255,0.5)"
                                                                        offset="1"></stop>
                                                                </linearGradient>
                                                            </defs>
                                                            <line id="SvgjsLine3251" x1="0" y1="0"
                                                                x2="0" y2="58" stroke="#b6b6b6"
                                                                stroke-dasharray="3" stroke-linecap="butt"
                                                                class="apexcharts-xcrosshairs" x="0" y="0"
                                                                width="1" height="58" fill="#b1b9c4"
                                                                filter="none" fill-opacity="0.9"
                                                                stroke-width="1"></line>
                                                            <g id="SvgjsG3264" class="apexcharts-grid">
                                                                <g id="SvgjsG3265"
                                                                    class="apexcharts-gridlines-horizontal"
                                                                    style="display: none;">
                                                                    <line id="SvgjsLine3268" x1="0"
                                                                        y1="0" x2="100"
                                                                        y2="0" stroke="#e0e0e0"
                                                                        stroke-dasharray="0" stroke-linecap="butt"
                                                                        class="apexcharts-gridline"></line>
                                                                    <line id="SvgjsLine3269" x1="0"
                                                                        y1="58" x2="100"
                                                                        y2="58" stroke="#e0e0e0"
                                                                        stroke-dasharray="0" stroke-linecap="butt"
                                                                        class="apexcharts-gridline"></line>
                                                                </g>
                                                                <g id="SvgjsG3266"
                                                                    class="apexcharts-gridlines-vertical"
                                                                    style="display: none;"></g>
                                                                <line id="SvgjsLine3271" x1="0"
                                                                    y1="58" x2="100" y2="58"
                                                                    stroke="transparent" stroke-dasharray="0"
                                                                    stroke-linecap="butt"></line>
                                                                <line id="SvgjsLine3270" x1="0"
                                                                    y1="1" x2="0" y2="58"
                                                                    stroke="transparent" stroke-dasharray="0"
                                                                    stroke-linecap="butt"></line>
                                                            </g>
                                                            <g id="SvgjsG3267" class="apexcharts-grid-borders"
                                                                style="display: none;"></g>
                                                            <g id="SvgjsG3254"
                                                                class="apexcharts-area-series apexcharts-plot-series">
                                                                <g id="SvgjsG3255" class="apexcharts-series"
                                                                    zIndex="0" seriesName="series-1"
                                                                    data:longestSeries="true" rel="1"
                                                                    data:realIndex="0">
                                                                    <path id="SvgjsPath3262"
                                                                        d="M0 52.19999999999982C4.999999999999999 52.19999999999982 9.285714285714285 58 14.285714285714285 58C19.285714285714285 58 23.57142857142857 46.400000000000546 28.57142857142857 46.400000000000546C33.57142857142857 46.400000000000546 37.857142857142854 29 42.857142857142854 29C47.857142857142854 29 52.14285714285714 0 57.14285714285714 0C62.14285714285714 0 66.42857142857142 40.600000000000364 71.42857142857142 40.600000000000364C76.42857142857142 40.600000000000364 80.71428571428571 17.400000000000546 85.71428571428571 17.400000000000546C90.71428571428571 17.400000000000546 94.99999999999999 17.400000000000546 99.99999999999999 17.400000000000546C99.99999999999999 17.400000000000546 99.99999999999999 17.400000000000546 99.99999999999999 58L0 58C0 58 0 52.19999999999982 0 52.19999999999982 "
                                                                        fill="url(#SvgjsLinearGradient3258)"
                                                                        fill-opacity="1" stroke-opacity="1"
                                                                        stroke-linecap="butt" stroke-width="0"
                                                                        stroke-dasharray="0" class="apexcharts-area"
                                                                        index="0"
                                                                        clip-path="url(#gridRectMaskp885fx8d)"
                                                                        pathTo="M 0 52.19999999999982C 4.999999999999999 52.19999999999982 9.285714285714285 58 14.285714285714285 58C 19.285714285714285 58 23.57142857142857 46.400000000000546 28.57142857142857 46.400000000000546C 33.57142857142857 46.400000000000546 37.857142857142854 29 42.857142857142854 29C 47.857142857142854 29 52.14285714285714 0 57.14285714285714 0C 62.14285714285714 0 66.42857142857142 40.600000000000364 71.42857142857142 40.600000000000364C 76.42857142857142 40.600000000000364 80.71428571428571 17.400000000000546 85.71428571428571 17.400000000000546C 90.71428571428571 17.400000000000546 94.99999999999999 17.400000000000546 99.99999999999999 17.400000000000546C 99.99999999999999 17.400000000000546 99.99999999999999 17.400000000000546 99.99999999999999 58 L 0 58z"
                                                                        pathFrom="M 0 6687.400000000001 L 0 6687.400000000001 L 14.285714285714285 6687.400000000001 L 28.57142857142857 6687.400000000001 L 42.857142857142854 6687.400000000001 L 57.14285714285714 6687.400000000001 L 71.42857142857142 6687.400000000001 L 85.71428571428571 6687.400000000001 L 99.99999999999999 6687.400000000001 L 0 6687.400000000001">
                                                                    </path>
                                                                    <path id="SvgjsPath3263"
                                                                        d="M0 52.19999999999982C4.999999999999999 52.19999999999982 9.285714285714285 58 14.285714285714285 58C19.285714285714285 58 23.57142857142857 46.400000000000546 28.57142857142857 46.400000000000546C33.57142857142857 46.400000000000546 37.857142857142854 29 42.857142857142854 29C47.857142857142854 29 52.14285714285714 0 57.14285714285714 0C62.14285714285714 0 66.42857142857142 40.600000000000364 71.42857142857142 40.600000000000364C76.42857142857142 40.600000000000364 80.71428571428571 17.400000000000546 85.71428571428571 17.400000000000546C90.71428571428571 17.400000000000546 94.99999999999999 17.400000000000546 99.99999999999999 17.400000000000546C99.99999999999999 17.400000000000546 99.99999999999999 17.400000000000546 99.99999999999999 17.400000000000546 "
                                                                        fill="none" fill-opacity="1"
                                                                        stroke="#ffffff" stroke-opacity="1"
                                                                        stroke-linecap="butt" stroke-width="2"
                                                                        stroke-dasharray="0" class="apexcharts-area"
                                                                        index="0"
                                                                        clip-path="url(#gridRectMaskp885fx8d)"
                                                                        pathTo="M 0 52.19999999999982C 4.999999999999999 52.19999999999982 9.285714285714285 58 14.285714285714285 58C 19.285714285714285 58 23.57142857142857 46.400000000000546 28.57142857142857 46.400000000000546C 33.57142857142857 46.400000000000546 37.857142857142854 29 42.857142857142854 29C 47.857142857142854 29 52.14285714285714 0 57.14285714285714 0C 62.14285714285714 0 66.42857142857142 40.600000000000364 71.42857142857142 40.600000000000364C 76.42857142857142 40.600000000000364 80.71428571428571 17.400000000000546 85.71428571428571 17.400000000000546C 90.71428571428571 17.400000000000546 94.99999999999999 17.400000000000546 99.99999999999999 17.400000000000546"
                                                                        pathFrom="M 0 6687.400000000001 L 0 6687.400000000001 L 14.285714285714285 6687.400000000001 L 28.57142857142857 6687.400000000001 L 42.857142857142854 6687.400000000001 L 57.14285714285714 6687.400000000001 L 71.42857142857142 6687.400000000001 L 85.71428571428571 6687.400000000001 L 99.99999999999999 6687.400000000001"
                                                                        fill-rule="evenodd"></path>
                                                                    <g id="SvgjsG3256"
                                                                        class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown"
                                                                        data:realIndex="0">
                                                                        <g class="apexcharts-series-markers">
                                                                            <circle id="SvgjsCircle3288" r="0"
                                                                                cx="0" cy="0"
                                                                                class="apexcharts-marker w8s1qfiu6 no-pointer-events"
                                                                                stroke="#ffffff" fill="#ffffff"
                                                                                fill-opacity="1" stroke-width="2"
                                                                                stroke-opacity="0.9"
                                                                                default-marker-size="0"></circle>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                                <g id="SvgjsG3257" class="apexcharts-datalabels"
                                                                    data:realIndex="0"></g>
                                                            </g>
                                                            <line id="SvgjsLine3272" x1="0" y1="0"
                                                                x2="100" y2="0" stroke="#b6b6b6"
                                                                stroke-dasharray="0" stroke-width="1"
                                                                stroke-linecap="butt"
                                                                class="apexcharts-ycrosshairs"></line>
                                                            <line id="SvgjsLine3273" x1="0" y1="0"
                                                                x2="100" y2="0" stroke-dasharray="0"
                                                                stroke-width="0" stroke-linecap="butt"
                                                                class="apexcharts-ycrosshairs-hidden"></line>
                                                            <g id="SvgjsG3274" class="apexcharts-xaxis"
                                                                transform="translate(0, 0)">
                                                                <g id="SvgjsG3275" class="apexcharts-xaxis-texts-g"
                                                                    transform="translate(0, -4)"></g>
                                                            </g>
                                                            <g id="SvgjsG3285"
                                                                class="apexcharts-yaxis-annotations apexcharts-hidden-element-shown">
                                                            </g>
                                                            <g id="SvgjsG3286"
                                                                class="apexcharts-xaxis-annotations apexcharts-hidden-element-shown">
                                                            </g>
                                                            <g id="SvgjsG3287"
                                                                class="apexcharts-point-annotations apexcharts-hidden-element-shown">
                                                            </g>
                                                        </g>
                                                    </svg>
                                                    <div class="apexcharts-tooltip apexcharts-theme-light">
                                                        <div class="apexcharts-tooltip-series-group"
                                                            style="order: 1;"><span
                                                                class="apexcharts-tooltip-marker"
                                                                style="background-color: rgb(255, 255, 255);"></span>
                                                            <div class="apexcharts-tooltip-text"
                                                                style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                                <div class="apexcharts-tooltip-y-group"><span
                                                                        class="apexcharts-tooltip-text-y-label"></span><span
                                                                        class="apexcharts-tooltip-text-y-value"></span>
                                                                </div>
                                                                <div class="apexcharts-tooltip-goals-group"><span
                                                                        class="apexcharts-tooltip-text-goals-label"></span><span
                                                                        class="apexcharts-tooltip-text-goals-value"></span>
                                                                </div>
                                                                <div class="apexcharts-tooltip-z-group"><span
                                                                        class="apexcharts-tooltip-text-z-label"></span><span
                                                                        class="apexcharts-tooltip-text-z-value"></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                                        <div class="apexcharts-yaxistooltip-text"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-link col-lg-3 col-md-3 col-sm-12 price-item price-down"
                                    data-komoditas-id="108" false="" onclick="checkDetails(this)">
                                    <div
                                        style="display:flex;flex-direction:column;justify-content:space-between;align-items:flex-start;height:100%;">
                                        <span class="price-item-title">Tepung Terigu Kemasan (non-curah)</span>
                                        <div
                                            style="display:flex;justify-content:space-between;align-items:flex-end;width:100%;">
                                            <div style="margin-right:12px;font-size:13px;">
                                                <span class="price-item-price"
                                                    style="background-color:transparent;">
                                                    Rp 13.370
                                                </span>
                                                <span class="price-item-per">Rp/kg</span>
                                                <span class="price-item-increment"
                                                    style="background-color:#ff0000;padding:0px 5px;border-radius:5px;">
                                                    <i class="fa-solid fa-arrow-up" style="margin-right: 4px"></i>
                                                    0.07% - Rp 10
                                                </span>
                                            </div>
                                            <div class="chart" id="chart-108" style="min-height: 60px;">
                                                <div id="apexchartsdzeoz2npg"
                                                    class="apexcharts-canvas apexchartsdzeoz2npg apexcharts-theme-light"
                                                    style="width: 100px; height: 60px;"><svg id="SvgjsSvg3289"
                                                        width="100" height="60"
                                                        xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                                        xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg"
                                                        xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                                        style="background: transparent;">
                                                        <foreignObject x="0" y="0" width="100" height="60">
                                                            <div class="apexcharts-legend"
                                                                xmlns="http://www.w3.org/1999/xhtml"
                                                                style="max-height: 30px;"></div>
                                                        </foreignObject>
                                                        <rect id="SvgjsRect3293" width="0" height="0"
                                                            x="0" y="0" rx="0" ry="0"
                                                            opacity="1" stroke-width="0" stroke="none"
                                                            stroke-dasharray="0" fill="#fefefe"></rect>
                                                        <g id="SvgjsG3327" class="apexcharts-yaxis" rel="0"
                                                            transform="translate(-18, 0)"></g>
                                                        <g id="SvgjsG3291"
                                                            class="apexcharts-inner apexcharts-graphical"
                                                            transform="translate(0, 1)">
                                                            <defs id="SvgjsDefs3290">
                                                                <clipPath id="gridRectMaskdzeoz2npg">
                                                                    <rect id="SvgjsRect3295" width="106"
                                                                        height="64" x="-3" y="-3" rx="0"
                                                                        ry="0" opacity="1"
                                                                        stroke-width="0" stroke="none"
                                                                        stroke-dasharray="0" fill="#fff"></rect>
                                                                </clipPath>
                                                                <clipPath id="forecastMaskdzeoz2npg"></clipPath>
                                                                <clipPath id="nonForecastMaskdzeoz2npg"></clipPath>
                                                                <clipPath id="gridRectMarkerMaskdzeoz2npg">
                                                                    <rect id="SvgjsRect3296" width="104"
                                                                        height="62" x="-2" y="-2" rx="0"
                                                                        ry="0" opacity="1"
                                                                        stroke-width="0" stroke="none"
                                                                        stroke-dasharray="0" fill="#fff"></rect>
                                                                </clipPath>
                                                                <linearGradient id="SvgjsLinearGradient3301"
                                                                    x1="0" y1="0" x2="0"
                                                                    y2="1">
                                                                    <stop id="SvgjsStop3302" stop-opacity="0.65"
                                                                        stop-color="rgba(255,255,255,0.65)"
                                                                        offset="0"></stop>
                                                                    <stop id="SvgjsStop3303" stop-opacity="0.5"
                                                                        stop-color="rgba(128,135,255,0.5)"
                                                                        offset="1"></stop>
                                                                    <stop id="SvgjsStop3304" stop-opacity="0.5"
                                                                        stop-color="rgba(128,135,255,0.5)"
                                                                        offset="1"></stop>
                                                                </linearGradient>
                                                            </defs>
                                                            <line id="SvgjsLine3294" x1="0" y1="0"
                                                                x2="0" y2="58" stroke="#b6b6b6"
                                                                stroke-dasharray="3" stroke-linecap="butt"
                                                                class="apexcharts-xcrosshairs" x="0" y="0"
                                                                width="1" height="58" fill="#b1b9c4"
                                                                filter="none" fill-opacity="0.9"
                                                                stroke-width="1"></line>
                                                            <g id="SvgjsG3307" class="apexcharts-grid">
                                                                <g id="SvgjsG3308"
                                                                    class="apexcharts-gridlines-horizontal"
                                                                    style="display: none;">
                                                                    <line id="SvgjsLine3311" x1="0"
                                                                        y1="0" x2="100"
                                                                        y2="0" stroke="#e0e0e0"
                                                                        stroke-dasharray="0" stroke-linecap="butt"
                                                                        class="apexcharts-gridline"></line>
                                                                    <line id="SvgjsLine3312" x1="0"
                                                                        y1="58" x2="100"
                                                                        y2="58" stroke="#e0e0e0"
                                                                        stroke-dasharray="0" stroke-linecap="butt"
                                                                        class="apexcharts-gridline"></line>
                                                                </g>
                                                                <g id="SvgjsG3309"
                                                                    class="apexcharts-gridlines-vertical"
                                                                    style="display: none;"></g>
                                                                <line id="SvgjsLine3314" x1="0"
                                                                    y1="58" x2="100" y2="58"
                                                                    stroke="transparent" stroke-dasharray="0"
                                                                    stroke-linecap="butt"></line>
                                                                <line id="SvgjsLine3313" x1="0"
                                                                    y1="1" x2="0" y2="58"
                                                                    stroke="transparent" stroke-dasharray="0"
                                                                    stroke-linecap="butt"></line>
                                                            </g>
                                                            <g id="SvgjsG3310" class="apexcharts-grid-borders"
                                                                style="display: none;"></g>
                                                            <g id="SvgjsG3297"
                                                                class="apexcharts-area-series apexcharts-plot-series">
                                                                <g id="SvgjsG3298" class="apexcharts-series"
                                                                    zIndex="0" seriesName="series-1"
                                                                    data:longestSeries="true" rel="1"
                                                                    data:realIndex="0">
                                                                    <path id="SvgjsPath3305"
                                                                        d="M0 50.75C4.999999999999999 50.75 9.285714285714285 14.5 14.285714285714285 14.5C19.285714285714285 14.5 23.57142857142857 0 28.57142857142857 0C33.57142857142857 0 37.857142857142854 21.75 42.857142857142854 21.75C47.857142857142854 21.75 52.14285714285714 50.75 57.14285714285714 50.75C62.14285714285714 50.75 66.42857142857142 21.75 71.42857142857142 21.75C76.42857142857142 21.75 80.71428571428571 58 85.71428571428571 58C90.71428571428571 58 94.99999999999999 50.75 99.99999999999999 50.75C99.99999999999999 50.75 99.99999999999999 50.75 99.99999999999999 58L0 58C0 58 0 50.75 0 50.75 "
                                                                        fill="url(#SvgjsLinearGradient3301)"
                                                                        fill-opacity="1" stroke-opacity="1"
                                                                        stroke-linecap="butt" stroke-width="0"
                                                                        stroke-dasharray="0" class="apexcharts-area"
                                                                        index="0"
                                                                        clip-path="url(#gridRectMaskdzeoz2npg)"
                                                                        pathTo="M 0 50.75C 4.999999999999999 50.75 9.285714285714285 14.5 14.285714285714285 14.5C 19.285714285714285 14.5 23.57142857142857 0 28.57142857142857 0C 33.57142857142857 0 37.857142857142854 21.75 42.857142857142854 21.75C 47.857142857142854 21.75 52.14285714285714 50.75 57.14285714285714 50.75C 62.14285714285714 50.75 66.42857142857142 21.75 71.42857142857142 21.75C 76.42857142857142 21.75 80.71428571428571 58 85.71428571428571 58C 90.71428571428571 58 94.99999999999999 50.75 99.99999999999999 50.75C 99.99999999999999 50.75 99.99999999999999 50.75 99.99999999999999 58 L 0 58z"
                                                                        pathFrom="M 0 9744 L 0 9744 L 14.285714285714285 9744 L 28.57142857142857 9744 L 42.857142857142854 9744 L 57.14285714285714 9744 L 71.42857142857142 9744 L 85.71428571428571 9744 L 99.99999999999999 9744 L 0 9744">
                                                                    </path>
                                                                    <path id="SvgjsPath3306"
                                                                        d="M0 50.75C4.999999999999999 50.75 9.285714285714285 14.5 14.285714285714285 14.5C19.285714285714285 14.5 23.57142857142857 0 28.57142857142857 0C33.57142857142857 0 37.857142857142854 21.75 42.857142857142854 21.75C47.857142857142854 21.75 52.14285714285714 50.75 57.14285714285714 50.75C62.14285714285714 50.75 66.42857142857142 21.75 71.42857142857142 21.75C76.42857142857142 21.75 80.71428571428571 58 85.71428571428571 58C90.71428571428571 58 94.99999999999999 50.75 99.99999999999999 50.75C99.99999999999999 50.75 99.99999999999999 50.75 99.99999999999999 50.75 "
                                                                        fill="none" fill-opacity="1"
                                                                        stroke="#ffffff" stroke-opacity="1"
                                                                        stroke-linecap="butt" stroke-width="2"
                                                                        stroke-dasharray="0" class="apexcharts-area"
                                                                        index="0"
                                                                        clip-path="url(#gridRectMaskdzeoz2npg)"
                                                                        pathTo="M 0 50.75C 4.999999999999999 50.75 9.285714285714285 14.5 14.285714285714285 14.5C 19.285714285714285 14.5 23.57142857142857 0 28.57142857142857 0C 33.57142857142857 0 37.857142857142854 21.75 42.857142857142854 21.75C 47.857142857142854 21.75 52.14285714285714 50.75 57.14285714285714 50.75C 62.14285714285714 50.75 66.42857142857142 21.75 71.42857142857142 21.75C 76.42857142857142 21.75 80.71428571428571 58 85.71428571428571 58C 90.71428571428571 58 94.99999999999999 50.75 99.99999999999999 50.75"
                                                                        pathFrom="M 0 9744 L 0 9744 L 14.285714285714285 9744 L 28.57142857142857 9744 L 42.857142857142854 9744 L 57.14285714285714 9744 L 71.42857142857142 9744 L 85.71428571428571 9744 L 99.99999999999999 9744"
                                                                        fill-rule="evenodd"></path>
                                                                    <g id="SvgjsG3299"
                                                                        class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown"
                                                                        data:realIndex="0">
                                                                        <g class="apexcharts-series-markers">
                                                                            <circle id="SvgjsCircle3331" r="0"
                                                                                cx="0" cy="0"
                                                                                class="apexcharts-marker wu9onio3i no-pointer-events"
                                                                                stroke="#ffffff" fill="#ffffff"
                                                                                fill-opacity="1" stroke-width="2"
                                                                                stroke-opacity="0.9"
                                                                                default-marker-size="0"></circle>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                                <g id="SvgjsG3300" class="apexcharts-datalabels"
                                                                    data:realIndex="0"></g>
                                                            </g>
                                                            <line id="SvgjsLine3315" x1="0" y1="0"
                                                                x2="100" y2="0" stroke="#b6b6b6"
                                                                stroke-dasharray="0" stroke-width="1"
                                                                stroke-linecap="butt"
                                                                class="apexcharts-ycrosshairs"></line>
                                                            <line id="SvgjsLine3316" x1="0" y1="0"
                                                                x2="100" y2="0" stroke-dasharray="0"
                                                                stroke-width="0" stroke-linecap="butt"
                                                                class="apexcharts-ycrosshairs-hidden"></line>
                                                            <g id="SvgjsG3317" class="apexcharts-xaxis"
                                                                transform="translate(0, 0)">
                                                                <g id="SvgjsG3318" class="apexcharts-xaxis-texts-g"
                                                                    transform="translate(0, -4)"></g>
                                                            </g>
                                                            <g id="SvgjsG3328"
                                                                class="apexcharts-yaxis-annotations apexcharts-hidden-element-shown">
                                                            </g>
                                                            <g id="SvgjsG3329"
                                                                class="apexcharts-xaxis-annotations apexcharts-hidden-element-shown">
                                                            </g>
                                                            <g id="SvgjsG3330"
                                                                class="apexcharts-point-annotations apexcharts-hidden-element-shown">
                                                            </g>
                                                        </g>
                                                    </svg>
                                                    <div class="apexcharts-tooltip apexcharts-theme-light">
                                                        <div class="apexcharts-tooltip-series-group"
                                                            style="order: 1;"><span
                                                                class="apexcharts-tooltip-marker"
                                                                style="background-color: rgb(255, 255, 255);"></span>
                                                            <div class="apexcharts-tooltip-text"
                                                                style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                                <div class="apexcharts-tooltip-y-group"><span
                                                                        class="apexcharts-tooltip-text-y-label"></span><span
                                                                        class="apexcharts-tooltip-text-y-value"></span>
                                                                </div>
                                                                <div class="apexcharts-tooltip-goals-group"><span
                                                                        class="apexcharts-tooltip-text-goals-label"></span><span
                                                                        class="apexcharts-tooltip-text-goals-value"></span>
                                                                </div>
                                                                <div class="apexcharts-tooltip-z-group"><span
                                                                        class="apexcharts-tooltip-text-z-label"></span><span
                                                                        class="apexcharts-tooltip-text-z-value"></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                                        <div class="apexcharts-yaxistooltip-text"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
                                    <img src="./src/assets/img/panelharga-loading.svg" width="70px">
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

@endsection
