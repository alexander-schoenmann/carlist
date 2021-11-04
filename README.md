# TYPO3 Extension ```carlist```

A Typo3 extension for a secondhand car platform. The entire extension is responsive and can be viewed on any available devices.

## 1 Usage
### 1.1 Installation
#### Installation using zip file
Download the project from the master branch and save the zip file on your local machine. 

### 1.2 First setup
#### Create the necessary files and folders

Bevor die Extension installiert wird, werden die Seiten angelegt, damit wir die PageUID der Detailseite kennen und im Programmcode ändern können.

Before the extension can be used, some preparations have to be made. 
A new standard page must be created in the directory tree. Let's call it "CarList". Two more standard pages must be created below it. The first one we call "Detail", the second one "CarList Germany".
At the same level as the CarList page, a folder must now be created, let's call it "Cars".

Die Seite Detail kann für das Menü ausgeblendet werden, da später ein Klick auf das entsprechende Listenelement in der CarList oder CarListGermany Ansicht auf die jeweilige Unterseite verweist (sieht je nach ausgewähltem Auto anders aus). Dafür Rechtsklick im PageTree auf die Seite Detail > More options... > Hide in menu. Die Seite ist dann nicht mehr im Menü der Webseite zu sehen, aber immer noch aufrufbar.

Der ZipFolder wird entpackt, die Datei ListView.html wird geöffnet (liegt unter Resources/Private/Partials) und in Zeile 4 die Zahl hinter pageUid="XX" wird auf die SeitenPageID der Detailseite gesetzt. Dann speichern und das Projekt wieder zippen.

Then go to your typo3 project and navigate to the extensions tab. After that you can upload the zip-file and install the extension.

#### Add plugins to the pages

Klick auf einzelnen Seiten mittels Page im Tree

Then several plugins must be added to the newly created pages.
- Add the plugin ```Car List``` to the "CarList" and "Detail" pages.
- Add the plugin ```Car List Germany``` to the "CarList Germany" page.

Beim Hinzufügen der einzelnen Plugins muss noch etwas eingestellt werden:
Für CarList und Detail: im Reiter Plugin muss das CarList Plugin ausgewählt sein, unter Record Storage Page der Cars Folder (in diesem Ordner werden die eigentlichen Daten gespeichert).
Für CarListGermany: im Reiter Plugin muss das CarListGermany Plugin ausgewählt sein, unter Record Storage Page wieder der Cars Folder. Die Eingabe Felder bei den Plugin Options bleiben leer.

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

Klick auf Cars Folder mittels List im Tree

Content can now be added. To do this, click on the "Cars" folder and add Brands, Cars, Countries and Owners. The individual contents are related to each other, so it makes sense to start with the owner or the country.

## 2 Administration corner
### 2.1 Contribution
Pull Requests are gladly welcome! Nevertheless please don't forget to add an issue and connect it to your pull requests. This is very helpful to understand what kind of issue the PR is going to solve.

Bugfixes: Please describe what kind of bug your fix solve and give me feedback how to reproduce the issue. I'm going to accept only bugfixes if I can reproduce the issue.

Features: Not every feature is relevant for the bulk of ```carlist``` users. In addition: I don't want to make ```carlist``` even more complicated in usability for an edge case feature. It helps to have a discussion about a new feature before you open a pull request.

### 2.2 Contact
If you have any questions regarding the project, please do not hesitate to contact me. I can be reached at alexander@schoenmann.co.at.
