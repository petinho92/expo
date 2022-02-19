import FaIcon from "gold-admin/fa-icon";
import AbstractPage from "gold-admin/app/abstract-page";
import type {SvelteComponent} from "svelte";
import Stat from "src/components/Stat.svelte";
// import Stat2 from "src/components/Stat2.svelte";
import {writable} from "svelte/store";
import type {Writable} from "svelte/store";

export default class DashboardPage extends AbstractPage {
    public closeable:boolean = false;
    get $title(): Writable<string> {return writable('');}
    get $icon(): Writable<FaIcon> {return writable(FaIcon.s('dice-d6')) ;}
    get component(): typeof SvelteComponent { return Stat;}
}