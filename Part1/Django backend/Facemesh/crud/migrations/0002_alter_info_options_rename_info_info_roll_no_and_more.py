# Generated by Django 4.1.7 on 2023-03-29 14:28

from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('crud', '0001_initial'),
    ]

    operations = [
        migrations.AlterModelOptions(
            name='info',
            options={},
        ),
        migrations.RenameField(
            model_name='info',
            old_name='info',
            new_name='roll_no',
        ),
        migrations.RemoveField(
            model_name='info',
            name='created_at',
        ),
        migrations.RemoveField(
            model_name='info',
            name='updated_at',
        ),
        migrations.AddField(
            model_name='info',
            name='department',
            field=models.TextField(max_length=30, null=True),
        ),
        migrations.AddField(
            model_name='info',
            name='hostel',
            field=models.IntegerField(null=True),
        ),
    ]
