import Gallery from "src/pages/Gallery.svelte";
import Welcome from "src/pages/Welcome.svelte";
import ProgramGuide from "src/pages/ProgramGuide.svelte";
import Accommodations from "src/pages/Accommodations.svelte";
import Sponsor from "src/pages/Sponsor.svelte";
import Contact from "src/pages/Contact.svelte";
import StudentRegistration from "src/pages/StudentRegistration.svelte";
import GetQRCode from "src/pages/GetQRCode.svelte";


const routes = {
    '/' : Welcome,
    '/programguide':ProgramGuide,
    '/accommodation' : Accommodations,
    '/sponsors' : Sponsor,
    // '/gallery/:[ea, k]' : Gallery,
    '/gallery' :Gallery,
    '/contact' : Contact,
    '/student' : StudentRegistration,
    '/qr/:code' : GetQRCode




}
export default routes;