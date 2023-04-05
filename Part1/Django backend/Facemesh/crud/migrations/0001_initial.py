# Generated by Django 4.0.6 on 2023-02-18 19:15

from django.db import migrations, models
import uuid


class Migration(migrations.Migration):

    initial = True

    dependencies = [
    ]

    operations = [
        migrations.CreateModel(
            name='Info',
            fields=[
                ('id', models.UUIDField(default=uuid.uuid4, editable=False, primary_key=True, serialize=False)),
                ('info', models.TextField(max_length=200, null=True)),
                ('name', models.TextField(default='John Doe', max_length=20)),
                ('created_at', models.DateTimeField(auto_now_add=True)),
                ('updated_at', models.DateTimeField(auto_now=True)),
            ],
            options={
                'verbose_name': 'Post',
                'ordering': ('-created_at',),
            },
        ),
    ]