import urllib.request

# only for python 3.x

def isTrashmail(email):
	res = urllib.request.urlopen("https://www.block-trashmail.space/api/"+email).read()
	res = str(res)
	if res[2:3] == "1":
		return True
	else:
		return False
