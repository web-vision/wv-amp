# wv-amp
Typo3 Extension for generating amp page type and also provides amp view helpers

## What does it do?
Provides an additional ``` pagetype (701) ``` (Eg:https://example.com/index.php?id=6&type=701) where which you can load your page in amp mode.

Also ships an additional viewhelper ``` amp.image ``` which can be used in templates for rendering amp images. More stuffs on the way.

## Installation
You can install the extension using: 
- Extension manager or 
- composer  ``` composer req web-vision/wv_amp ```

## Override custom styling
Extension has default css file ``` styles.css ``` which gives basic styling to page.
To insert custom css styling ``` amp.headerData.100 ``` property needs to be overriden in your site extension.
Only one ``` <style amp-custom>  ``` tag is allowed in AMP pages.

## Constant settings
There are few self-explanatory settings available in ts constants:
``` typeNum ```
``` processForDoktypes ```
``` headerLogoPath ```
``` headerLogoText ```
``` themeColor ```

## Rendering images
Extension overrides image partial ``` wv_amp/Resources/Private/Partials/ContentElements/Media/Rendering/Image.html ``` and generates
AMP compliant img tag ``` <amp-img> ```, but only when fluid_styled_content or bootstrap_package extensions are used.
If there are additional custom templates with img tags, they also needs to be overriden.

## Requirements
- TYPO3 9.5 and upwards
