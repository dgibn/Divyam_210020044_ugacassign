from django.shortcuts import render,get_object_or_404,HttpResponseRedirect
from rest_framework import viewsets
from rest_framework.response import Response
from rest_framework.decorators import api_view
# from .serializers import UGAC_serializer
from uuid import uuid4
from crud.models import Info
from .forms import student

def my_form(request):
    if request.method == "POST":
        form=student(request.POST)
        if form.is_valid():
            form.save()
            form=student()
    else:
        form = student()
    return render(request,"form.html",{"form":form})

def details(request):
    queryset={}
    queryset["dataset"]=Info.objects.all()
    return render(request,"list_view.html",queryset)

def delete(request,id):
    queryset={}
    obj=get_object_or_404(Info,id=id)
    if request.method == "POST":
        obj[0].delete()
        return HttpResponseRedirect("/")
    return render(request,"delete.html",queryset)

def update(request,id):
    queryset={}
    obj=get_object_or_404(Info,id=id)
    form=student(request.POST or None,instance=obj)
    if form.is_valid():
        form.save()
        return HttpResponseRedirect("/")
    queryset["form"]=form
    return render(request,"update.html",queryset)


# @api_view(["POST"])
# def add(request):
#     serializer=UGAC_serializer(data=request.data)
#     if serializer.is_valid():
#         serializer.save()
#     return Response(serializer.data)

# @api_view(["POST"])
# def update(request):
#     serializer=UGAC_serializer(data=request.data)
#     if serializer.is_valid():
#         queryset=Info.objects.get(name=serializer.data["name"])
#     return Response(serializer.data)

# @api_view(["POST"])
# def delete(request):
#     serializer=UGAC_serializer(data=request.data)
#     if serializer.is_valid():
#         queryset=Info.objects.get(name=serializer.data["name"]).delete()
#     return Response(serializer.data)

# Create your views here.

