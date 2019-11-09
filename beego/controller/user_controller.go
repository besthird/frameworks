package controller

import "github.com/astaxie/beego"
import "github.com/astaxie/beego/orm"

type UserController struct {
	beego.Controller
}

func (this *UserController) Get() {
	id := this.Ctx.Input.Param(":id")
	o := orm.NewOrm()
	var maps []orm.Params
	o.Raw("SELECT * FROM `user` WHERE id = ? LIMIT 1;", id).Values(&maps)
	json := map[string]interface{}{"code": 0, "data": maps[0]}
	this.Data["json"] = &json
	this.ServeJSON()
}
