# Category Image Slider with Child Categories Landing Page. 
This Extension Helps in Enabling Category Slider functionality on cms page Using Widget.
### Features
- This Extesnion Includes Flex Slider.
- One can set flex slider controls as per their need.
- This slider get includes on selected cms page via widget.
- This also Enables Unique functinality of parent and child category section. i.e; If Parent category has a child category then it will redirect to landing page which contains all child category.
- Same for the next too i.e; if child category has it child category then it will redirect to landing page same as above.
- If category do not have child category and contain products then it will show products only. So, the flow get break if one category do not have its sub category.
- One can Enable / Disable it from store config and from widget too.

### Setup
- Download the Extension.
- Extract it and place it in magento at app/code
- Check if module is enable or not by runnig this command.-> php bin/magento module:status
- php bin/magento module:enable Widget_CategorySlider
- Now run these commands given bellow:

### Commands:
- php bin/magento setup:upgrade
- php bin/magento setup:static-content:deploy -f
- php bin/magento setup:di:compile
- php bin/magento indexer:reindex
- php bin/magento cache:clean
- php bin/magento cache:flush
- chmod -R 777 var/ pub/ generated/ app/

Extension Gets Installed SUccessfully.

Now Enable Extension from store config
Open cms Page and add widget there set category and fill required fields.
Can See on that home page slider with category image will appear.

## Note:
- Make Sure that the Selected category has category Image uploaded.
- Slider will appear on the selected cms page in which you have added it as a widget.
- If Category do not have an Image then it will not appear on Landing Page.


### Thanks.
### Vivek Sharma (Magento Developer) 
