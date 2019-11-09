package main

import (
	"github.com/kataras/iris/v12"
	"github.com/kataras/iris/v12/middleware/recover"
)

func main() {
	app := iris.New()
	app.Use(recover.New())

	// Method:   GET
	// Resource: http://localhost:8080
	app.Handle("GET", "/", func(ctx iris.Context) {
		json := map[string]interface{}{"code": 0, "data": "Hello World."}
		ctx.JSON(json)
	})

	app.Handle("GET", "/db/user/{id:int}", func(ctx iris.Context) {
		id := ctx.Params().Get("id")
		json := map[string]interface{}{"code": 0, "data": id}
		ctx.JSON(json)
	})

	app.Run(iris.Addr(":9501"), iris.WithoutServerError(iris.ErrServerClosed))
}
