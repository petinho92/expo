<script>
    import '@fortawesome/fontawesome-free/js/fontawesome.js';
    import '@fortawesome/fontawesome-free/js/brands.js';
    import '@fortawesome/fontawesome-free/js/regular.js';
    import '@fortawesome/fontawesome-free/js/solid.js';
    import 'bulma/css/bulma.css';
    import 'bulma-extensions/bulma-divider/dist/css/bulma-divider.min.css';
    import Router from 'svelte-spa-router';
    import routes from "src/application/router/routes.ts";

    import {_, addMessages, init} from "svelte-i18n";
    import hu from './application/lang/hu.json';
    import en from './application/lang/en.json';
    import {writable} from 'svelte/store';

    let languages = writable(localStorage.getItem("lang") !== null ? localStorage.getItem("lang") : 'hu');
    addMessages('hu', hu);
    addMessages('en', en);
    $: {
        init({
            fallbackLocale: 'hu',
            initialLocale: $languages,
        });
        localStorage.setItem("lang", $languages);
    }
    import Cookie from "src/components/elements/Cookie.svelte";
    import Navbar2 from "src/components/Navbar2.svelte";

    let visible = writable(localStorage.getItem("allowedCookie") !== null ? localStorage.getItem("allowedCookie") : 'false');
    localStorage.setItem("allowedCookie", 'false')
</script>


<Cookie
        descriptionText={$_('cookie.descriptionText')}
        allowButtonText={$_('cookie.allowButtonText')}
        bind:visible={$visible}
/>
<Navbar2 languages={languages}/>
<Router {routes}/>

<style lang="css" global>
    body {
        background-color: #CBD0D8;
    }
</style>
