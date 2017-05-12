# block-trashmail.space

With the free <a href="https://www.block-trashmail.space" target="_blank">block-trashmail.space</a> API you can detect disposable email adresses.<br>
There are currently ~5.5k domains in the database.<br>
Database will be updated automatically every day.

# How to use?
In this repository you can find example functions for PHP, JavaScript, Python 2.x and Python 3.x

<h4>Javascript</h4>

```javascript
function callback(bool) {
    console.log(bool.toString()); // true
}
isTrashmail("john.doe@trash-mail.com", callback);
```

<h4>PHP & Python</h4>

```php
isTrashmail("john.doe@trash-mail.com"); // returns true
```


<br>Feel free to pull examples for other languages :)

# API
<code>https://www.block-trashmail.space/api/trash-mail.com</code><br>
<b><i>- OR -</i></b><br>
<code>https://www.block-trashmail.space/api/john.doe@trash-mail.com</code><br>
<br>
If the email-domain is on our blacklist the API returns <b>1</b>, otherwise <b>0</b>.
<br>
<br>
<b>Rate limiting:</b><br>
max. 10.000 requests per day and IP.<br>
If you need more, contact me at <img src="https://www.block-trashmail.space/images/mail.png" /> to get unlimited access :) 
