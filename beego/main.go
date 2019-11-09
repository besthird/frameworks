package main

import (
	"beego/controller"
	"github.com/astaxie/beego"
	"github.com/astaxie/beego/config"
	"github.com/astaxie/beego/orm"
	_ "github.com/go-sql-driver/mysql"
)

type User struct {
	Id   int
	Name string `orm:"size(100)"`
}

func init() {
	conf, _ := config.NewConfig("ini", ".env.ini")
	dataSrouce := "root:" + conf.String("db:password") + "@tcp(127.0.0.1:3306)/hyperf?charset=utf8"
	// set default database
	orm.RegisterDataBase("default", "mysql", dataSrouce, 30)

	// register model
	orm.RegisterModel(new(User))

	// create table
	orm.RunSyncdb("default", false, true)
}

func main() {
	beego.Router("/", &controller.IndexController{})
	beego.Router("/db/user/?:id", &controller.UserController{})
	beego.Run(":9501")
}
