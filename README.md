# MR_Myapp
Create a custom Session Namespace with a Model in Magento

The Mage_Core_Model_Session_Abstract model already contains everything we need. Access session variables using the magic get/set methods.


// Set the "foo" variable

Mage::getSingleton("myapp/session")->setFoo("bar");


// Same thing

Mage::getSingleton("myapp/session")->setData("foo", "bar");


// Another example. Let's say we want to name our variable "foo_bar"

Mage::getSingleton("myapp/session")->setFooBar("data");


// or

Mage::getSingleton("myapp/session")->setData("foo_bar", "bar");


// Get data the same way

Mage::getSingleton("myapp/session")->getFoo()


// or

Mage::getSingleton("myapp/session")->getData("foo");
