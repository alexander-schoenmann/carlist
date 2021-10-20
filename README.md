# TYPO3 Extension ```carlist```

A Typo3 extension for a secondhand car platform. The entire extension is responsive and can be viewed on any available devices.

## 1 Usage
### 1.1 Installation
#### Installation using zip file
Download the project from the master branch and save the zip file on your local machine. Then go to your typo3 project and navigate to the extensions tab. After that you can upload the zip-file and install the extension.

### 1.2 First setup
#### Create the necessary files and folders
Before the extension can be used, some preparations have to be made. 
A new standard page must be created in the directory tree. Let's call it "CarList". Two more standard pages must be created below it. The first one we call "Detail", the second one "CarList Germany".
At the same level as the CarList page, a folder must now be created, let's call it "Cars".

#### Add plugins to the pages
Then several plugins must be added to the newly created pages.
- Add the plugin ```Car List``` to the "CarList" and "Detail" pages.
- Add the plugin ```Car List Germany``` to the "CarList Germany" page.

#### Create a template record
In order to add further important settings, a template file must be created for the "CarList" page. 
Copy the following code into the "Setup" field of the template:
```
page = PAGE
page.config.contentObjectExceptionHandler = 0
page {
  includeCSS {
    portfolio_css_bootstrap = EXT:cars/Resources/Public/Css/bootstrap.css
    portfolio_css_bootstrap_min = EXT:cars/Resources/Public/Css/bootstrap.min.css
    portfolio_css_main = EXT:cars/Resources/Public/Css/main.css
  }
  includeJSFooter {
    portfolio_scripts_jquery = EXT:cars/Resources/Public/JavaScript/jquery.min.js
    portfolio_scripts_bootstrap = EXT:cars/Resources/Public/JavaScript/bootstrap.bundle.js
    portfolio_scripts_bootstrap_min = EXT:cars/Resources/Public/JavaScript/bootstrap.bundle.min.js
  }
}

plugin.tx_cars{
  settings {
    # detailPid = 55
    germany.image.height = 140
    show.image.height = 400
    # displays a dummy image if no media item is available
    displayDummyIfNoMedia = 1
    displayDummyLogoIfNoMedia = 1
    displayDummyFlagIfNoMedia = 1
    list {
      dummyImage = typo3conf/ext/cars/Resources/Public/Images/dummy-preview-image.png
    }
    show {
      image {
        logo{
        	height = 60
        }
        flag{
        	height = 15
        	width = 15
        }
      }
      dummyImageLogo = typo3conf/ext/cars/Resources/Public/Images/dummy-logo-image.png
      dummyImageFlag = typo3conf/ext/cars/Resources/Public/Images/dummy-flag-image.png
    }
  }
}
```

### 1.3 Use the extension
#### Create content
Content can now be added. To do this, click on the "Cars" folder and add Brands, Cars, Countries and Owners. The individual contents are related to each other, so it makes sense to start with the owner or the country.

## 2 Administration corner
### 2.1 Contribution
Pull Requests are gladly welcome! Nevertheless please don't forget to add an issue and connect it to your pull requests. This is very helpful to understand what kind of issue the PR is going to solve.

Bugfixes: Please describe what kind of bug your fix solve and give me feedback how to reproduce the issue. I'm going to accept only bugfixes if I can reproduce the issue.

Features: Not every feature is relevant for the bulk of ```carlist``` users. In addition: I don't want to make ```carlist``` even more complicated in usability for an edge case feature. It helps to have a discussion about a new feature before you open a pull request.

### 2.2 Contact
If you have any questions regarding the project, please do not hesitate to contact me. I can be reached at alexander@schoenmann.co.at
