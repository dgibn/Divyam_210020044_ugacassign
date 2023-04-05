from django.db import models
from uuid import uuid4
# Create your models here.
class Info(models.Model):
    id=models.UUIDField(primary_key=True,default=uuid4,editable=False)
    name=models.CharField(max_length=20,null=False,default="John Doe",unique=True)
    roll_no=models.CharField(max_length=200,null=True,unique=True)
    department=models.CharField(max_length=30,null=True)
    hostel=models.IntegerField(null=True)
    # def __str__(self):
    #     return str(self.id)

    # def save(self, *args, **kwargs):        # pylint: disable=W0222
    #     super().save(*args, **kwargs)

    # class Meta:
    #     verbose_name = "Details"
    #     ordering = ("-created_at",)