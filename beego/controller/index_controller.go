package controller

import "github.com/astaxie/beego"

type IndexController struct {
	beego.Controller
}

func (this *IndexController) Get() {
	json := map[string]interface{}{"code":0, "data":"Hello World."}
	this.Data["json"] = &json
	this.ServeJSON()
}