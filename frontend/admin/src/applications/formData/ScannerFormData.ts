export default class ScannerFormData {
    private _date : String = "";
    private _room : String = "";
    private _phase : String = "";
    private _qrCode : String = "";


    get date(): String {
        return this._date;
    }

    set date(value: String) {
        this._date = value;
    }

    get room(): String {
        return this._room;
    }

    set room(value: String) {
        this._room = value;
    }

    get phase(): String {
        return this._phase;
    }

    set phase(value: String) {
        this._phase = value;
    }

    get qrCode(): String {
        return this._qrCode;
    }

    set qrCode(value: String) {
        this._qrCode = value;
    }
}