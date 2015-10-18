<?php if(!defined('KIRBY')) exit ?>

title: Home
pages: false
fields:
  title:
    label: Title
    type:  text
  break:
    type:  line
  bannertext:
    label: Banner Text
    type:  text
  linktitle:
    label: Link Title
    type:  text
    width: 1/2
  bannerlink:
    label: Banner Link
    type:  page
    width: 1/2

  breaktwo:
    type: line
  
  collectiontext:
    label: Collection Text
    type:  text
  collectiontitle:
    label: Collection Title
    type: text
    width: 1/2
  collectionlink:
    label: Collection Link
    type:  page
    width: 1/2
  collectionImages:
    label: Featured Images Collection
    type: structure
    entry: >
      <h2 style="font-size: 21px; margin-top: 10px;">{{featuretitle}}</h2><br>
      <img src="http://sphereone/content/home/{{featureimage}}" height=300px/></br></br>
    fields:
      featuretitle:
        label: Image Title
        type: text
      featureimage:
        label: Collection Image
        type: select
        options: images


  break-three:
    type:  line


  shoptext:
    label: Shop Text
    type:  textarea
    width: 1/2
  shoplink:
    label: Shop Link
    type:  page
    width: 1/2
  shopImages:
    label: Featured Images Shop
    type: structure
    entry: >
      <h2 style="font-size: 21px; margin-top: 10px; margin-bottom: 10px;">{{featuretitle}}</h2>
      <p class="padding-top: 10px;"><strong>Link:</strong> {{shoplink}}</p>
      <img src="http://sphereone/content/home/{{featureimage}}" height=300px/></br></br>
    fields:
      featuretitle:
        label: Image Title
        type: text
      featureimage:
        label: Shop Image
        type: select
        options: images
      shoplink:
        label: Link
        type: page
  
  break-four:
    type:  line
  
  pagelink:
    label: Content Pages
    type: structure
    entry: >
      <h2 style="font-size: 21px; margin-top: 10px; margin-bottom: 10px;">{{pagetitle}}</h2>
      <p><strong>Link:</strong> {{pagelink}}</p>
      <img src="http://sphereone/content/home/{{pageimage}}" height=300px/></br></br>
    fields:
      pagetitle:
        label: Page Title
        type: text
      pageimage:
        label: Page Image
        type: select
        options: images
      pagelink:
        label: Page Link
        type: page

  break-five:
    type:  line