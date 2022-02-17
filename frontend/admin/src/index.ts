import "./options";
import App from "gold-admin/app.svelte";
import ListManager from "gold-admin/app/list-manager";
import MenuItem from "gold-admin/app/menu-item";
import PageManager from "gold-admin/app/page-manager";
import AuthApi from "gold-admin/auth/auth-api";
import FaIcon from "gold-admin/fa-icon";
import UserForm from "src/ui/user/user-form";
import DashboardPage from "src/ui/dashboard/dashboard-page";
import ScannerPage from "src/applications/pages/scanner-page";
import StatPage from "src/applications/pages/stat-page";
import EmailPage from "src/applications/pages/email-page";
import UserList from "./ui/user/user-list";
import type I_User from "gold-admin/auth/user.interface";
import FormPage from "gold-admin/form/form-page";

window.addEventListener('load', () => {

		let pageManager = new PageManager();
		let listManager = new ListManager();
		let authApi = new AuthApi("/api/auth", () => {
			// pageManager.add(new DashboardPage());
			pageManager.add(new ScannerPage());
			// listManager.add(new UserList());
		});

		function menu(user: I_User | null) {
			return [
				// new MenuItem("Dashboard", FaIcon.s("dice-d6"), () => {pageManager.add(new DashboardPage())}),
				new MenuItem("Scanner", FaIcon.s("barcode"), ()=>{pageManager.add(new ScannerPage())}),
				new MenuItem("Registrants", FaIcon.s("search"), ()=>{pageManager.add(new StatPage())}),
				new MenuItem("Email", FaIcon.s("envelope"), ()=>{pageManager.add(new EmailPage())}),
				new MenuItem("User", FaIcon.s("users"), [
					new MenuItem("New User", FaIcon.s("user-plus"), ()=> {pageManager.add(new FormPage(new UserForm()))}),
				], "administrator"),
					new MenuItem("User List", FaIcon.s("users"), ()=> {listManager.add(new UserList()),"administrator"})
			]
		}

		function userMenu(user: I_User | null) {
			return [new MenuItem("Me", FaIcon.s("user"), () => {pageManager.add(new FormPage(new UserForm(user!.id)))})]
		}

		new App({target: document.body, props: {pageManager, listManager, authApi, menu, userMenu}})
	}
)
