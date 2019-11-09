package controller

import "github.com/astaxie/beego"
import "github.com/astaxie/beego/orm"

type UserController struct {
	beego.Controller
}

func (this *UserController) Get() {
	o := orm.NewOrm()
	var maps []orm.Params
	o.Raw("SELECT * FROM `user` WHERE id = 1 LIMIT 1;").Values(&maps)
	json := map[string]interface{}{"code":0, "data":maps[0]}
	this.Data["json"] = &json
	this.ServeJSON()
}


