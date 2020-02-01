<a-scene embedded arjs="sourceType: webcam; debugUIEnabled: false;" class="scene">
<a-assets>
  <a-asset-item id="animated-asset1" src="./assets/ar/1/test-BAP-1.glb">
  </a-asset-item>
  <a-asset-item id="animated-asset2" src="./assets/ar/2/test-BAP-2.glb">
  </a-asset-item>
</a-assets>

<a-marker type='pattern' url='./assets/ar/data/dog.patt' class="marker">
  <a-entity animation-mixer gltf-model="#animated-asset1" class="entity" scale="2 2 2">
  </a-entity>
</a-marker>

<a-marker type='pattern' url='./assets/ar/data/emoji.patt' class="marker">
  <a-entity animation-mixer gltf-model="#animated-asset2" class="entity" scale="2 2 2">
  </a-entity>
</a-marker>

<a-entity camera>
</a-entity>
</a-scene>
