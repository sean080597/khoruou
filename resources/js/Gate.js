export default class Gate{
    constructor(user){
        this.user = user;
    }

    isGiamDoc(){
        return this.user.MaCV === 'GD';
    }

    isQuanLy(){
        return this.user.MaCV === 'QL';
    }

    isNhanVien(){
        return this.user.MaCV === 'NV';
    }
}