@extends('layouts.app')


@section('content')
    <div class="">
        <div class="row justify-content-center">
            <div class="col-md-11">
                <p class="display-4 text-center">Dashboard Application Steps </p>
                <hr>
                <div class="m-4">
                    {{-- _______________ --}}
                    <div id="topPageView">
                        <div class=" text-white" id="navbar_1" style="border-bottom: 5px solid black">
                            Incepem aici
                        </div>
                        <div class="text-white" id="navbar_2">Eligibilitate</div>
                        <div class="text-white" id="navbar_3">Finantarea ta</div>
                        <div class="text-white" id="navbar_4">Cauti consultant?</div>
                        <div class="text-white" id="navbar_5">Scrie proiect</div>
                    </div>
                    {{-- _______________ --}}
                    <div id="applicationStepsMainDiv" class="p-5 mt-5  text-center"
                        style="box-shadow: rgb(0 0 0 / 35%) 0px 5px 15px;
                        border: 1px solid #dfdfdf;
                        border-radius: 12px;">
                        {{-- PAGE 1 --}}
                        <div id="page_1">
                            <p class="display-6 text-secondary text-decoration-underline mb-4 mt-0">Step : 1</p>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group text-start col-md-8">
                                        <label for="inputPassword" class="form-label specificLabelFields text-left">Enter
                                            CUI/CIF
                                            (Using Only Numbers)</label>
                                        <input type="text" id="inputPassword" class="form-control specificInputFields"
                                            placeholder="Enter Your CUI/CIF">

                                    </div>
                                    <div class="form-group text-start mt-3">
                                        <label for="inputPassword" class="form-label specificLabelFields text-left">Company
                                            Name</label>
                                        <input type="text" id="inputPassword" class="form-control specificInputFields"
                                            placeholder="Enter Company Name">

                                    </div>
                                    <div class="row  mt-3">
                                        <div class="col-md-6">
                                            <div class="form-group text-start">
                                                <label for="inputPassword"
                                                    class="form-label specificLabelFields text-left">Company Type</label>
                                                <input type="text" id="inputPassword"
                                                    class="form-control specificInputFields"
                                                    placeholder="Enter Your Company Type">

                                            </div>
                                            <div class="form-group text-start">
                                                <label for="inputPassword"
                                                    class="form-label specificLabelFields text-left">Operating profit
                                                    2020</label>
                                                <input type="text" oninput="calculateOperatingProfit2020(this.value)"
                                                    id="inputPassword" class="form-control specificInputFields"
                                                    placeholder="Enter Operating profit
                                                    2020">

                                            </div>
                                            <div class="form-group text-start">
                                                <label for="inputPassword"
                                                    class="form-label specificLabelFields text-left">County
                                                </label>
                                                <input type="text" id="inputPassword"
                                                    class="form-control specificInputFields" placeholder="Enter County">

                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group text-start">
                                                <label for="inputPassword"
                                                    class="form-label specificLabelFields text-left">Date Of
                                                    Establishment</label>
                                                <input type="date" id="inputPassword"
                                                    class="form-control specificInputFields">

                                            </div>
                                            <div class="form-group text-start">
                                                <label for="inputPassword"
                                                    class="form-label specificLabelFields text-left">Operating Profit 2021
                                                </label>
                                                <input type="text" oninput="calculateOperatingProfit2021(this.value)"
                                                    id="inputPassword" class="form-control specificInputFields"
                                                    placeholder="Enter Operating Profit 2021">

                                            </div>
                                            <div class="form-group text-start">
                                                <label for="inputPassword"
                                                    class="form-label specificLabelFields text-left">Net turnover 2021
                                                </label>
                                                <input type="text" id="inputPassword"
                                                    class="form-control specificInputFields"
                                                    placeholder="Enter Net turnover 2021 ">

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 mt-2">
                                    <p class="text-start p-2 lead" style="border: 1px solid red; border-radius: 12px;">
                                        Analiza Smis® este oferită gratuit și cu titlu de informare. Echipa Smis.ro nu îşi
                                        asumă informaţiile incorecte sau stabilirea în mod eronat a eligibilităţii. Statusul
                                        de firmă eligibilă sau neeligibilă este returnat în funcție de selecțiile
                                        dumneavoastră şi de informaţiile despre companie. Informațiile afişate în cadrul
                                        Smis® au scop pur informativ și nu pot fi folosite ca documente oficiale. Atât
                                        Smis®, cât și oricare dintre angajații săi nu oferă niciun fel de garanţie şi nu are
                                        nicio răspundere, implicită sau expresă, referitoare la orice informații accesate
                                        prin intermediul site-ului. Punctajul final al companiei poate fi stabilit numai în
                                        urma scrierii proiectului. Eligibilitatea companiei este un proces complex și este
                                        necesar să parcurgeți ghidul solicitantului. Asigurați-vă că firma interogată nu
                                        intră în categoria de "întreprinderi aflate în dificultate", nu desfăşoară
                                        activități cu produse cu caracter erotic sau obscen, activităţi din domeniul
                                        jocurilor de noroc, tutun etc. / Incadrarea companiei în categoria micro / mică /
                                        mijlocie nu ţine cont de legăturile dintre firme. Vă mulțumim pentru înțelegere!
                                    </p>
                                </div>
                            </div>
                            <div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-auto" style="border-right: 1px solid black">
                                                <div id="circleChart_1" role="progressbar" aria-valuenow="65"
                                                    aria-valuemin="0" aria-valuemax="100" style="--value:0"></div>
                                            </div>
                                            <div class="col-auto">
                                                <p style="color: #649cbd" class="fs-4 my-0">2021</p>
                                                <p style="color: #649cbd" class="fs-4 my-0">Operating Profit 2021</p>
                                                <p style="color: #649cbd" class="fs-4" id="circleChartValue_1"></p>
                                            </div>
                                        </div>
                                        <hr class="w-75">
                                        <div class="row mt-1">
                                            <div class="col-auto" style="border-right: 1px solid black">
                                                <div id="circleChart_2" role="progressbar" aria-valuenow="65"
                                                    aria-valuemin="0" aria-valuemax="100" style="--value:0"></div>
                                            </div>
                                            <div class="col-auto">
                                                <p style="color: #649cbd" class="fs-4 my-0">2022</p>
                                                <p style="color: #649cbd" class="fs-4 my-0">Operating Profit 2022</p>
                                                <p style="color: #649cbd" class="fs-4" id="circleChartValue_2"></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <canvas id="chartJSContainer" width="400" height="160"></canvas>
                                    </div>
                                </div>

                            </div>
                        </div>

                        {{-- PAGE 2 --}}
                        <div style="display: none;" id="page_2">
                            <p class="display-6 text-secondary text-decoration-underline mb-4 mt-0">Step : 2</p>
                        </div>
                        <div style="display: none;" id="page_3">Page 3</div>
                        <div style="display: none;" id="page_4">Page 4</div>
                        <div style="display: none;" id="page_5">Page 5</div>
                    </div>
                </div>
                <div class="row my-5">
                    <div class="col-md-6 text-start">
                        <button id="prev" style="width: 130px;" class="btn btn-dark"
                            onclick="previousPage()">Previous</button>
                    </div>
                    <div class="col-md-6 text-end">
                        <button id="next" style="width: 130px;" class="btn btn-primary"
                            onclick="nextPage()">Next</button>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
