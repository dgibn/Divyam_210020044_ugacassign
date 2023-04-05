"""
    Python script to read a json file and inputting the data to a database
"""
import json
import mysql.connector as sql
conn=sql.connect(host="localhost",user="root",passwd="",database="User")
x=conn.cursor()

"""Sample code to write data inside a json file"""
# with open("data.json","w") as file:
#     i="yes"
#     j=0
#     output={}
#     while (i!="stop"):
#         user={}
#         user["name"]=input("Enter name:")
#         user["username"]=input("Enter username:")
#         user["password"]=input("Enter password:")
#         output[j]=user
#         i=input("?")
#         j+=1
#     obj=json.dumps(output,indent=4)
#     file.write(obj)
# file.close()

"""Code to read a json file and insert data into database"""

file=open("data.json","r")
data=json.load(file)
for i in data:
    print(data[i])
    name=data[i]["name"]
    username=data[i]["username"]
    password=data[i]["password"]
    sql_query="INSERT INTO details VALUES ({},{},{})".format(name,username,password)
    x.execute(sql_query)
    conn.commit()

