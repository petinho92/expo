<script>
    import Footer from '../components/elements/Footer.svelte';
    import Images from "../components/gallery/Images.svelte"
    import {y2020e2, y2020k2} from "src/application/store/images.ts";
</script>

    <div class="card">
        <div class="card-header-title">
            Előadás
        </div>
        <div class="card-content">
        <main>
            <Images images={y2020e2}/>
        </main>
        </div>
    </div>
    <div class="card">
        <div class="card-header-title">
            Kiállítás
        </div>
        <div class="card-content has-text-centered">
        <main>
            <Images images={y2020k2}/>
        </main>
        </div>
    </div>


<Footer/>
<style>
  .card{
      margin: auto;
  }

</style>

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



