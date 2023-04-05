from django.urls import path
from crud import views
from . import views
urlpatterns=[
    # path("",views.details, name="details"),
    # path("add",views.add, name="add"),
    # path("del/<char:name>",views.delete, name="delete")
    path(r"form",views.my_form,name="form"),
    path("",views.details,name="details"),
    path("del/<id>",views.delete,name="del"),
    path("upd/<id>",views.update,name="update"),

]