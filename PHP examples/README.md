# PHP examples
A collection of PHP files to demonstrate the direct data feed (API) in action. One of the scripts can be used to sign calls automatically, and another allows you to sign calls through a proxy.

Don't forget, it won't work unless you add your own key details to the source code!

## Using these examples
To get started using and developing these examples, please follow these instructions.

1. Register or sign in at [http://api.esd.org.uk].
2. Visit the following page to create your keys: [http://developertools.esd.org.uk/key].
3. In the dataExample.php and metricTypeExample.php files, replace YOUR_PUBLIC_PRIVATE_KEY with your own public private key created in step 2.
4. In the dataExample.php and metricTypeExample.php files, replace YOUR_PUBLIC_PRIVATE_SECRET with your own public private secret created in step 2.

## Making calls with a PHP proxy

With a PHP proxy, you can sign AJAX calls on the fly. To use the PHP proxy, follow these instructions.

1. In the proxy.php file, replace YOUR_PUBLIC_PRIVATE_KEY with your own public private key.
2. In the proxy.php file, replace YOUR_PUBLIC_PRIVATE_SECRET with your own public private secret.
3. Place the proxy.php, proxyExample.html and esdSign.php files in a web server directory that is set up to run PHP.
4. Run the proxyExample.html file.

## Need help?

Get in touch with the support team – support@esd.org.uk