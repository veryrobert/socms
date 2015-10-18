title: Collection
pages: true
  template:
    - year
fields:
  title:
    label: Product Title
    type:  text
  builder:
    label: Sections
    type: builder
    fieldsets:
      bodytext:
        label: Collection text
        fields:
          text:
            label: Collection text
            type: textarea
      oneimages:
        label: One Images
        entry: >
          <h2 style="font-size: 21px; margin-top: 10px; margin-bottom: 10px;">Title: {{imagetitle}}</h2>
          <h2>Description: {{imagedescription}}</h2><br>
          <img src="{{_fileUrl}}{{image}}" height=300px/></br> </br>
        fields:
          imagetitle:
            label: Image Title
            type: text
          imagedescription:
            label: Image Description
            type: text
          image:
            label: Select Image
            type: select
            options: images
      twoimages:
        label: Two Images
        entry: >
          <div style="overflow: auto; margin-top: 10px;">
            <div style="float: left; width: 50%;">
              <h2 style="font-size: 21px; margin-top: 10px; margin-bottom: 10px;">Title: {{imagetitleone}}</h2>
              <h2>Description: {{imagedescriptionone}}</h2><br>
              <img src="{{_fileUrl}}{{imageone}}" height=300px/></br>
            </div>
            <div style="float: left; width: 50%;">
              <h2 style="font-size: 21px; margin-top: 10px; margin-bottom: 10px;">Title: {{imagetitletwo}}</h2>
              <h2>Description: {{imagedescriptiontwo}}</h2><br>
              <img src="{{_fileUrl}}{{imagetwo}}" height=300px/></br>
            </div>
          </div>
        fields:
          imagetitleone:
            label: First Image Title
            type: text
          imagedescriptionone:
            label: First Image Description
            type: text
            width: 1/2
          imageone:
            label: First Select Image
            type: select
            options: images
            width: 1/2
          break-four:
            type:  line
          imagetitletwo:
            label: Second Image Title
            type: text
          imagedescriptiontwo:
            label: Second Image Description
            type: text
            width: 1/2
          imagetwo:
            label: Second Select Image
            type: select
            options: images
            width: 1/2
