# TYPO3 Extension ```carlist```

A Typo3 extension for a secondhand car platform. In addition to the general list, a list for German cars has also been added (can be changed as desired). The entire extension is responsive and can be viewed on any available devices.

## 1 Usage
### 1.1 Download
Download the project from the master branch and save the zip file on your local machine. Create a new folder (e.g. project) and unzip the zip file into it.

### 1.2 First setup
#### Create the necessary files and folders
Before the extension can be used, some preparations have to be made in typo3. 
A new standard page must be created in the directory tree. Let's call it "CarList". Two more standard pages must be created below it. The first one we call "Detail", the second one "CarList Germany".
At the same level as the "CarList" page, a folder must now be created, let's call it "Cars".

#### Hide detail page
Afterwards, the "Detail" page can be hidden for the menu. This means that the "Detail" page can only be accessed by selecting the corresponding car from the list. To do this, right-click on the "Detail" page in the page tree and select "More options..." and "Hide in menu". 

#### Change pageUid
In order to address the correct "Detail" page later, a small change has to be done. Search for the created "Detail" page in the page tree and move the mouse over the icon in front of it. An id will then be displayed (e.g. id=58). Navigate to the "project" folder in your explorer and open the file ListView.html (project/Resources/Private/Partials/ListView.html). Change the pageUid (approx. line 4) to the id value of your "Detail" page. Then save and close the file.

### 1.3 Installation
Compress the "project" folder. Then navigate to the extensions tab in typo3. After that you can upload the zip-file and install the extension. The extension was originally developed with Typo3 version 10.4.9.

### 1.4 Further adjustments
#### Add plugins to the pages
Then several plugins must be added to the newly created pages. To do this, switch to the "Page" tab in the module menu.
- Add the plugin ```Car List``` to the "CarList" and "Detail" pages.
- Add the plugin ```Car List Germany``` to the "CarList Germany" page.

When adding each plugin, make sure that the corresponding plugin is also selected in the drop-down menu under the "Plugin" tab. In addition, the "Cars" folder must be specified in the "Record Storage Page" field below (for each added plugin).

#### Create a template record
In order to add further important settings, a template file must be created for the "CarList" page. Select the "CarList" page and then switch to the "Extensions" tab in the module menu. Copy the following code into the "Setup" field of the template:
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

### 1.5 Use the extension
#### Create content
Content can now be added. To do this, switch to the "List" tab in the module menu. Then click on the "Cars" folder and add Brands, Cars, Countries and Owners. The individual contents are related to each other, so it makes sense to start with the owner or the country.

#### Google Maps Key
When creating an owner, the exact address can be entered, which is later displayed on a map. For this purpose, a so-called Google Maps API Key must be generated (see https://developers.google.com/maps/documentation/javascript/get-api-key).
After you have received the key go to "Settings" > "Extension Configuration" in the module menu and select the extension. Enter the API key and save the configuration. The Google Maps map is now displayed.

## 2 Administration corner
### 2.1 Contribution
Pull Requests are gladly welcome! Nevertheless please don't forget to add an issue and connect it to your pull requests. This is very helpful to understand what kind of issue the PR is going to solve.

Bugfixes: Please describe what kind of bug your fix solve and give me feedback how to reproduce the issue. I'm going to accept only bugfixes if I can reproduce the issue.

Features: Not every feature is relevant for the bulk of ```carlist``` users. In addition: I don't want to make ```carlist``` even more complicated in usability for an edge case feature. It helps to have a discussion about a new feature before you open a pull request.

### 2.2 Contact
If you have any questions regarding the project, please do not hesitate to contact me. I can be reached at alexander@schoenmann.co.at.
