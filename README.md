# wv-amp
Typo3 Extension for generating amp page type and also provides amp view helpers

## What does it do?
Provides an additional ``` pagetype (701) ``` (Eg:https://example.com/index.php?id=6&type=701) where which you can load your page in amp mode.

You can configure the url in your site configuration to map ``` type=701 ``` to ``` amp ``` so that it will load like say https://example.com/amp/test-page .


Also ships an additional viewhelper ``` amp.image ``` which can be used in templates for rendering amp images. More stuffs on the way.


## Installation
You can install the extension using: 
- Extension manager or 
- composer  ``` composer req web-vision/wv_amp ```

## Requirements
- TYPO3 9.5 and upwards
