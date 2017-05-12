import urllib2

# only for python 2.x

def isTrashmail(email):
	res = urllib2.urlopen("https://www.block-trashmail.space/api/"+email).read()
	res = str(res)
	if res == "1":
		return True
	else:
		return False
