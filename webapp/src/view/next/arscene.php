<a-scene embedded arjs="sourceType: webcam; debugUIEnabled: false;" class="scene">
<a-assets>
  <a-asset-item id="gltf1" src="./assets/ar/gltf/test-kleur.glb">
  </a-asset-item>
  <a-asset-item id="gltf2" src="./assets/ar/gltf/test-VLAS.glb">
  </a-asset-item>

</a-assets>

<a-marker type='pattern' url='./assets/ar/data/pattern-colors.patt' name="colors" class="marker 0">
  <!-- <a-entity animation-mixer collada-model="#animated-asset1" class="entity" scale="1 1 1">
  </a-entity> -->
  <!-- <a-collada-model src="#animated-asset3" class="entity" scale="2 2 2"></a-collada-model> -->
  <a-entity gltf-model="#gltf2" scale=".02 .02 .02" animation-mixer></a-entity>
</a-marker>

<a-marker type='pattern' url='./assets/ar/data/dog.patt' name="dog" class="marker 1">
  <!-- <a-entity animation-mixer collada-model="#animated-asset2" class="entity" scale="2 2 2">
  </a-entity> -->
  <!-- <a-collada-model src="#animated-asset2" class="entity" scale="2 2 2"></a-collada-model> -->
  <a-entity gltf-model="#gltf1" scale=".03 .03 .03" animation-mixer></a-entity>
</a-marker>

<a-entity camera>
</a-entity>
</a-scene>
