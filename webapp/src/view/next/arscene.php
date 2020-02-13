<a-scene embedded arjs="sourceType: webcam; debugUIEnabled: false;" class="scene">
<a-assets>
  <a-asset-item id="gltf1" src="./assets/ar/gltf/test-kleur.glb">
  </a-asset-item>
  <a-asset-item id="gltf2" src="./assets/ar/gltf/test-VLAS.glb">
  </a-asset-item>
  <a-asset-item id="gltf3" src="./assets/ar/gltf/vlas-15.glb">
  </a-asset-item>
  <a-asset-item id="gltf4" src="./assets/ar/gltf/koffie-24.glb">
  </a-asset-item>
</a-assets>

<!-- <a-marker type='pattern' url='./assets/ar/data/pattern-colors.patt' name="colors" class="marker 0">
  <a-entity gltf-model="#gltf2" scale=".02 .02 .02" animation-mixer></a-entity>
</a-marker>

<a-marker type='pattern' url='./assets/ar/data/dog.patt' name="dog" class="marker 1">
  <a-entity gltf-model="#gltf1" scale=".03 .03 .03" animation-mixer></a-entity>
</a-marker>

<a-marker type='pattern' url='./assets/ar/data/dog.patt' name="dog" class="marker 2">
  <a-entity gltf-model="#gltf1" scale=".03 .03 .03" animation-mixer></a-entity>
</a-marker> -->

<a-marker type='pattern' url='./assets/ar/data/pattern-sticker.patt' name="0" class="marker 0">
  <a-entity gltf-model="#gltf2" scale=".02 .02 .02" animation-mixer></a-entity>
</a-marker>

<a-marker type='pattern' url='./assets/ar/data/pattern-1.patt' name="1" class="marker 1">
  <a-entity gltf-model="#gltf1" scale=".02 .02 .02" animation-mixer></a-entity>
</a-marker>

<a-marker type='pattern' url='./assets/ar/data/pattern-2.patt' name="2" class="marker 2">
  <a-entity gltf-model="#gltf2" scale=".02 .02 .02" animation-mixer></a-entity>
</a-marker>

<a-marker type='pattern' url='./assets/ar/data/pattern-3.patt' name="3" class="marker 3">
  <a-entity gltf-model="#gltf3" scale=".02 .02 .02" animation-mixer></a-entity>
</a-marker>

<a-marker type='pattern' url='./assets/ar/data/pattern-4.patt' name="4" class="marker 4">
  <a-entity gltf-model="#gltf2" scale=".02 .02 .02" animation-mixer></a-entity>
</a-marker>

<a-marker type='pattern' url='./assets/ar/data/pattern-5.patt' name="5" class="marker 5">
  <a-entity gltf-model="#gltf1" scale=".02 .02 .02" animation-mixer></a-entity>
</a-marker>

<a-marker type='pattern' url='./assets/ar/data/pattern-6.patt' name="6" class="marker 6">
  <a-entity gltf-model="#gltf4" scale=".02 .02 .02" animation-mixer></a-entity>
</a-marker>

<a-marker type='pattern' url='./assets/ar/data/pattern-next.patt' name="next" class="marker next">
  <a-entity gltf-model="#gltf2" scale=".02 .02 .02" animation-mixer></a-entity>
</a-marker>


<a-entity camera>
</a-entity>
</a-scene>
