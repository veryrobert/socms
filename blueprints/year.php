title: Season &amp; Year
pages: false
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
      oneImage:
        label: Single Images
        entry: >
          <h2>Title: {{imagetitle}}</h2>
          <h2>Description: {{imagedescription}}</h2><br>
          <img src="{{_fileUrl}}{{image}}" height=300px/></br> </br>
          <h2>Size: {{size}}</h2>
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
          size:
            label: Image Size
            type: radio
            options:
            	Small: Small image
            	Large: Large image