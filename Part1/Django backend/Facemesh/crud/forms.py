from django import forms
from .models import Info


class student(forms.ModelForm):
    class Meta:
        model=Info
        fields=["name","roll_no","department","hostel"]
        labels={"name":"Name","roll_no":"Roll_No","department":"Dept","hostel":"Hostel"}