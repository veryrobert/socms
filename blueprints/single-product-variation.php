title: Single Product Variation
pages: false
fields:
  title:
    label: Product Title
    type:  text
  shopImages:
    label: Two Images
    type: structure
    entry: >  
      <div style="overflow: auto; margin-top: 10px;">
        <div style="float: left; width: 25%;">
          <img src="/content/home/{{imageone}}" height=130px/></br>
        </div>
        <div style="float: left; width: 25%;">
          <img src="/content/home/{{imagetwo}}" height=130px/></br>
        </div>
        <div style="float: left; width: 25%;">
          <img src="/content/home/{{imagethree}}" height=130px/></br>
        </div>
        <div style="float: left; width: 25%;">
          <img src="/content/home/{{imagefour}}" height=130px/></br>
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
<!--       imagefour:
        label: Second Select Image
        type: select
        options: images
        width: 1/2 -->
  sizes:
    label: Sizes
    type: tags
    separator: 
    width: 1