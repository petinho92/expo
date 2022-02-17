<script>
    import {Tabs, Tab, TabList, TabPanel} from 'svelte-tabs';
</script>
<section class="section">
    <Tabs>
        <div class="has-text-centered">
            <TabList>
                <Tab>1. Nap</Tab>
                <Tab>2. Nap</Tab>
            </TabList>
        </div>
        <TabPanel>
            <div class="container">
                <ul class="responsive-table">
                    <li class="table-header">
                        <div class="col col-1">Időpont</div>
                        <div class="col col-2">Előadás neve</div>
                        <div class="col col-3">Terem</div>
                    </li>
                    <li class="table-row">
                        <div class="col col-1 time" data-label="Időpont">9<sup>30</sup> - 11<sup>30</sup></div>
                        <div class="col col-2 event" data-label="Előadás neve">Plenáris ülés</div>
                        <div class="col col-3 place" data-label="Terem">Hamerli terem</div>
                    </li>
                    <li class="table-row">
                        <div class="col col-1 time" data-label="Időpont">13<sup>00</sup> - 18<sup>15</sup></div>
                        <div class="col col-2 event" data-label="Előadás neve">Építészeti és építőipari szakmai előadások</div>
                        <div class="col col-3 place" data-label="Terem">Hamerli terem</div>
                    </li>
                    <li class="table-row">
                        <div class="col col-1 time" data-label="Időpont">13<sup>00</sup> - 17<sup>15</sup></div>
                        <div class="col col-2 event" data-label="Előadás neve">Épületgépészeti szakmai előadások</div>
                        <div class="col col-3 place" data-label="Terem">Zsolnay terem</div>
                    </li>
                    <li class="table-row">
                        <div class="col col-1 time" data-label="Időpont">13<sup>00</sup> - 16<sup>00</sup></div>
                        <div class="col col-2 event" data-label="Előadás neve">Villamosipari és informatikai szakmai előadások</div>
                        <div class="col col-3 place" data-label="Terem">Vigan terem</div>
                    </li>
                    <li class="table-row">
                        <div class="col col-1 time" data-label="Időpont">13<sup>00</sup> - 16<sup>15</sup></div>
                        <div class="col col-2 event" data-label="Előadás neve">Labortechnikai, Mélyépítési és Környezetvédelmi szakmai
                            előadások</div>
                        <div class="col col-3 place" data-label="Terem">Szekcióterem 1</div>
                    </li>
                    <li class="table-row">
                        <div class="col col-1 time" data-label="Időpont">13<sup>00</sup> - 15<sup>40</sup></div>
                        <div class="col col-2 event" data-label="Előadás neve">Gépipari szakmai előadások</div>
                        <div class="col col-3 place" data-label="Terem">Szekcióterem 3</div>
                    </li>
                    <li class="table-row">
                        <div class="col col-1 time" data-label="Időpont">13<sup>30</sup> - 16<sup>30</sup></div>
                        <div class="col col-2 event" data-label="Előadás neve">Informatikai szakmai előadások</div>
                        <div class="col col-3 place" data-label="Terem">Szekcióterem 4</div>
                    </li>
                    <li class="table-row">
                        <div class="col col-1 time" data-label="Időpont"></div>
                        <div class="col col-2 event" data-label="Előadás neve">Tettye Forrásház Zrt. szabaduló szobája</div>
                        <div class="col col-3 place" data-label="Terem">Iroda 4</div>
                    </li>
                    <li class="table-row">
                        <div class="col col-1 time" data-label="Időpont">18<sup>00</sup> - </div>
                        <div class="col col-2 event" data-label="Előadás neve">UPONOR Laboravató</div>
                        <div class="col col-3 place" data-label="Terem">PTE MIK Boszorkány út 2. C027</div>
                    </li>
                    <li class="table-row">
                        <div class="col col-1 time" data-label="Időpont">19<sup>00</sup> - </div>
                        <div class="col col-2 event" data-label="Előadás neve">Fogadás a kiállítók és partnerek részére</div>
                        <div class="col col-3 place" data-label="Terem">PTE MIK Boszorkány úti épület</div>
                    </li>
                </ul>
            </div>
        </TabPanel>

        <TabPanel>

            <div class="container">
                <ul class="responsive-table">
                    <li class="table-header">
                        <div class="col col-1">Időpont</div>
                        <div class="col col-2">Előadás neve</div>
                        <div class="col col-3">Terem</div>
                    </li>
                    <li class="table-row">
                        <div class="col col-1 time" data-label="Időpont">9<sup>00</sup> - 15<sup>10</sup></div>
                        <div class="col col-2 event" data-label="Előadás neve">Mérnökkamarai továbbképzés – Építési tagozat</div>
                        <div class="col col-3 place" data-label="Terem">Hamerli terem</div>
                    </li>
                    <li class="table-row">
                        <div class="col col-1 time" data-label="Időpont">9<sup>00</sup> - 15<sup>25</sup></div>
                        <div class="col col-2 event" data-label="Előadás neve">Majoros Gábor Emlékkonferencia
                            Membránszerkezetek Magyarországon</div>
                        <div class="col col-3 place" data-label="Terem">Vigan terem</div>
                    </li>
                    <li class="table-row">
                        <div class="col col-1 time" data-label="Időpont">9<sup>30</sup> - 11<sup>50</sup></div>
                        <div class="col col-2 event" data-label="Előadás neve">Épületgépészeti szakmai előadások</div>
                        <div class="col col-3 place" data-label="Terem">Zsolnay terem</div>
                    </li>
                    <li class="table-row">
                        <div class="col col-1 time" data-label="Időpont">9<sup>00</sup> - 11<sup>25</sup></div>
                        <div class="col col-2 event" data-label="Előadás neve">Villamosipari és informatikai szakmai előadások</div>
                        <div class="col col-3 place" data-label="Terem">Szekcióterem 1</div>
                    </li>
                    <li class="table-row">
                        <div class="col col-1 time" data-label="Időpont">9<sup>30</sup> - 11<sup>00</sup></div>
                        <div class="col col-2 event" data-label="Előadás neve">Gépipari szakmai előadások</div>
                        <div class="col col-3 place" data-label="Terem">Szekcióterem 3</div>
                    </li>
                    <li class="table-row">
                        <div class="col col-1 time" data-label="Időpont">9<sup>30</sup> - 11<sup>30</sup></div>
                        <div class="col col-2 event" data-label="Előadás neve">Plenáris ülés</div>
                        <div class="col col-3 place" data-label="Terem">Hamerli terem</div>
                    </li>
                    <li class="table-row">
                        <div class="col col-1 time" data-label="Időpont">9<sup>30</sup> - 11<sup>30</sup></div>
                        <div class="col col-2 event" data-label="Előadás neve">English Presentations Section</div>
                        <div class="col col-3 place" data-label="Terem">Section Room 4</div>
                    </li>
                    <li class="table-row">
                        <div class="col col-1 time" data-label="Időpont">10<sup>00</sup> - 11<sup>00</sup></div>
                        <div class="col col-2 event" data-label="Előadás neve">Épületgépész kerekasztal beszélgetés</div>
                        <div class="col col-3 place" data-label="Terem">Szekcióterem 6</div>
                    </li>
                </ul>
            </div>

        </TabPanel>
    </Tabs>
</section>

<style>
    .time{
    }
    sup{
        vertical-align: super;
        font-size: 10px;
    }
    .event{
        font-weight: bold;
    }
    .place{
        color: #797878;
        font-style: italic;
    }
    .container {
        max-width: 1000px;
        margin-left: auto;
        margin-right: auto;
        padding-left: 10px;
        padding-right: 10px;
    }
    .responsive-table li {
        border-radius: 3px;
        padding: 25px 30px;
        display: flex;
        justify-content: space-between;
        margin-bottom: 25px;
    }
    .responsive-table .table-header {
        background-color: #95A5A6;
        font-size: 14px;
        text-transform: uppercase;
        letter-spacing: 0.03em;
    }
    .responsive-table .table-row {
        background-color: #ffffff;
        box-shadow: 0px 0px 9px 0px rgba(0, 0, 0, 0.1);
    }
    .responsive-table .col-1 {
        flex-basis: 10%;
    }
    .responsive-table .col-2 {
        flex-basis: 40%;
    }
    .responsive-table .col-3 {
        flex-basis: 25%;
    }
    .responsive-table .col-4 {
        flex-basis: 25%;
    }
    @media all and (max-width: 767px) {
        .responsive-table .table-header {
            display: none;
        }
        .responsive-table li {
            display: block;
        }
        .responsive-table .col {
            flex-basis: 100%;
        }
        .responsive-table .col {
            display: flex;
            padding: 10px 0;
        }
        .responsive-table .col:before {
            color: #6C7A89;
            padding-right: 10px;
            content: attr(data-label);
            flex-basis: 50%;
            text-align: left;
        }
        .event{
            text-align: left;
            font-size: 12px;
            font-weight: normal;
        }
        .time{
            text-align: left;
            font-size: 12px;
        }
        .place{
            text-align: left;
            font-size: 12px;
        }
        sup{
            font-size: 8px;
        }
    }
</style>