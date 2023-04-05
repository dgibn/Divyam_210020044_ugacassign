from rest_framework import serializers
from crud.models import Info

# class UGAC_serializer(serializers.Serializer):
#     # class Meta:
#     #     model=Info
#     #     fields=("id","name","roll_no","department","hostel")
#     # name=serializers.CharField(max_length=200)
#     # roll_no=serializers.CharField(max_length=200)
#     # department=serializers.CharField(max_length=200)
#     # hostel=serializers.IntegerField()
#     # def create(self, validated_data):
#     #     return Info.objects.create(**validated_data)