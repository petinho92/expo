<script>
    import Footer from '../components/elements/Footer.svelte';
    import Images from "../components/gallery/Images.svelte";
    // import {y2020e2, y2020k2} from "src/application/store/images.ts";
    import {y2022ea, y2022k, y2022f, y2022sf, y2022hackaton} from "src/application/store/gallery.ts";
    import {_} from 'svelte-i18n';

</script>

<div class="ml-2 title">
    2022
</div>


<div class="conatiner">
    <div class="wrap">

        <div class="box">
            <h1>{$_('menu.gallery.pressphotos')}</h1>
            <Images images={y2022sf}/>
        </div>
        <div class="box">
            <h1>{$_('gallery.title.presentation')}</h1>
            <Images images={y2022ea}/>
        </div>
        <div class="box">
            <h1>{$_('gallery.title.exhibition')}</h1>
            <Images images={y2022k}/>
        </div>
        <div class="box">
            <h1>Fogadás</h1>
            <Images images={y2022f}/>
        </div>
        <div class="box">
            <h1>Hackaton</h1>
            <Images images={y2022hackaton}/>
        </div>

    </div>
</div>
<Footer/>
<style>
    .conatiner {
        width: 100%;
        height: 600px;
    }
    .wrap {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        -webkit-box-orient: horizontal;
        -webkit-box-direction: normal;
        -ms-flex-direction: row;
        flex-direction: row;
        margin-bottom: 20px;
    }

    .box {
        margin: 5px;
        width: 300px;
        height: 590px;
        text-align: center;
        border-radius: 3px;
        -webkit-transition: 200ms ease-in-out;
        -o-transition: 200ms ease-in-out;
        transition: 200ms ease-in-out;
        -webkit-box-shadow: 0 0 15px rgba(0,0,0,0.3);
        box-shadow: 0 0 15px rgba(0,0,0,0.3);
    }
    .box:hover {
        margin-bottom: -5px;
        -webkit-box-shadow: 0 0 5px rgba(0,0,0,0.7);
        box-shadow: 0 0 5px rgba(0,0,0,0.7);
    }
    .box h1 {
        color: #fff;
        padding: 30px;
        margin-top: 25px;
        text-align: center;
        font-weight: 100;
        font-size: 25px;
        background: rgba(16, 21, 34, 0.8);
        -webkit-box-shadow: 0 0 30px rgba(16,21,34,0.7);
        box-shadow: 0 0 30px rgba(16,21,34,0.8);
    }

</style>


<!--<div class="card">-->
<!--    <div class="card-header-title">-->
<!--        {$_('menu.gallery.pressphotos')}-->
<!--    </div>-->
<!--    <div class="card-content">-->
<!--        <main>-->
<!--            <Images images={y2022sf}/>-->
<!--        </main>-->
<!--    </div>-->
<!--</div>-->
<!--<div class="card">-->
<!--    <div class="card-header-title">-->
<!--        {$_('gallery.title.presentation')}-->
<!--    </div>-->
<!--    <div class="card-content">-->
<!--        <main>-->
<!--            <Images images={y2022ea}/>-->
<!--        </main>-->
<!--    </div>-->
<!--</div>-->
<!--<div class="card">-->
<!--    <div class="card-header-title">-->
<!--        {$_('gallery.title.exhibition')}-->
<!--    </div>-->
<!--    <div class="card-content has-text-centered">-->
<!--        <main>-->
<!--            <Images images={y2022k}/>-->
<!--        </main>-->
<!--    </div>-->
<!--</div>-->
<!--<div class="card">-->
<!--    <div class="card-header-title">-->
<!--        Fogadás-->
<!--    </div>-->
<!--    <div class="card-content has-text-centered">-->
<!--        <main>-->
<!--            <Images images={y2022f}/>-->
<!--        </main>-->
<!--    </div>-->
<!--</div>-->
<!--<div class="card">-->
<!--    <div class="card-header-title">-->
<!--        Hackaton-->
<!--    </div>-->
<!--    <div class="card-content">-->
<!--        <main>-->
<!--            <Images images={y2022hackaton}/>-->
<!--        </main>-->
<!--    </div>-->

<!--</div>-->
<!--<Footer/>-->
<!--<style>-->
<!--    .card {-->
<!--        margin: auto;-->
<!--    }-->
<!--</style>-->

<!---------------------------------------------------------------------------------------------------------------------->
<!--{#if $location === '/gallery/2020'}-->

<!--    <section class="section has-text-centered">-->


<!--        <div class="container">-->
<!--            <h1 class="mt-6 is-size-2">Előadás</h1>-->
<!--            <Splide options={ { rewind: true, lazyLoad: 'nearby', type: 'fade', pagination: false } }>-->
<!--                {#each y2020ea as photo}-->
<!--                    <SplideSlide>-->
<!--                        <img src={photo.src} alt={photo.alt}/>-->
<!--                    </SplideSlide>-->
<!--                {/each}-->
<!--            </Splide>-->
<!--        </div>-->


<!--        <div class="container">-->
<!--            <h1 class="mt-6 is-size-2">Kiállítás</h1>-->
<!--            <Splide options={ { rewind: true, lazyLoad: 'nearby', type: 'fade', pagination: false } }>-->
<!--                {#each y2020k as photo}-->
<!--                    <SplideSlide>-->
<!--                        <img src={photo.src} alt={photo.alt}/>-->
<!--                    </SplideSlide>-->
<!--                {/each}-->
<!--            </Splide>-->
<!--        </div>-->
<!--    </section>-->
<!--{/if}-->
<!--{#if $location === '/gallery/pressphotos'}-->
<!--    <section class="section has-text-centered">-->


<!--        <div class="container">-->
<!--            <h1 class="mt-6 is-size-2">Sajtófotók</h1>-->
<!--            <Splide options={ { rewind: true, lazyLoad: 'nearby', type: 'fade', pagination: false } }>-->
<!--                {#each pressphotos as photo}-->
<!--                    <SplideSlide>-->
<!--                        <img src={photo.src} alt={photo.alt}/>-->
<!--                    </SplideSlide>-->
<!--                {/each}-->
<!--            </Splide>-->
<!--        </div>-->
<!--    </section>-->
<!--{/if}-->



