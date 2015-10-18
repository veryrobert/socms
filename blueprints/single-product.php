title: Single Product
pages: false
fields:
  title:
    label: Product Title
    type:  text
  short-description:
    label: Short Description
    type:  text
    width: 1/2
  price:
    label: Price
    type:  number
    width: 1/2
  shopImages:
    label: Two Images
    type: structure
    entry: >
      <div style="overflow: auto; margin-top: 10px;">
        <div style="float: left; width: 25%;">
          <img src="http://sphereone/content/home/{{imageone}}" height=130px/></br>
        </div>
        <div style="float: left; width: 25%;">
          <img src="http://sphereone/content/home/{{imagetwo}}" height=130px/></br>
        </div>
        <div style="float: left; width: 25%;">
          <img src="http://sphereone/content/home/{{imagethree}}" height=130px/></br>
        </div>
        <div style="float: left; width: 25%;">
          <img src="http://sphereone/content/home/{{imagefour}}" height=130px/></br>
        </div>
      </div>
    fields:
      imageone:
        label: First Select Image
        type: select
        options: images
        width: 1/2
      imagetwo:
        label: Second Select Image
        type: select
        options: images
        width: 1/2
      imagethree:
        label: First Select Image
        type: select
        options: images
        width: 1/2
      imagefour:
        label: Second Select Image
        type: select
        options: images
        width: 1/2
  longdescription:
    label: Long Description
    type:  wysiwyg
  sizes:
    label: Sizes
    type: tags
    separator: 
    width: 1/2
  colours:
    label: Colours
    type: tags
    separator: |
    width: 1/2
  tags:
    label: Tags
    type: tags
    separator: |
  details:
    label: Details &amp; Fit
    type:  wysiwyg
    width: 1/2
  measurments:
    label: Measurments
    type:  wysiwyg
    width: 1/2