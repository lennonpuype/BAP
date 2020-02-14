<a-scene embedded arjs="sourceType: webcam; debugUIEnabled: false;" class="scene">
<a-assets>
  <!-- <a-asset-item id="gltf1" src="./assets/ar/gltf/test-kleur.glb">
  </a-asset-item>
  <a-asset-item id="gltf2" src="./assets/ar/gltf/test-VLAS.glb">
  </a-asset-item>
  <a-asset-item id="gltf3" src="./assets/ar/gltf/vlas-15.glb">
  </a-asset-item> -->
  <a-asset-item id="gltf4" src="./assets/ar/gltf/koffie-24.glb">
  </a-asset-item>
  <a-asset-item id="gltf5" src="./assets/ar/gltf/koffie-26.glb">
  </a-asset-item>
  <a-asset-item id="gltf6" src="./assets/ar/gltf/kalle-manten.glb">
  </a-asset-item>
  <a-asset-item id="gltf7" src="./assets/ar/gltf/kalle-manten.glb">
  </a-asset-item>
  <a-asset-item id="gltf8" src="./assets/ar/gltf/next-logo.glb">
  </a-asset-item>
  <a-asset-item id="gltf9" src="./assets/ar/gltf/next-logonew.glb">
  </a-asset-item>
</a-assets>

<a-marker type='pattern' url='./assets/ar/data/pattern-sticker.patt' name="0" class="marker 0">
  <a-entity gltf-model="#gltf8" light="type: ambient; color: #BBB" scale=".02 .02 .02" animation-mixer></a-entity>
</a-marker>

<a-marker type='pattern' url='./assets/ar/data/pattern-1.patt' name="1" class="marker 1">
  <a-entity gltf-model="#gltf8" light="color: #AFA; intensity: .2" scale=".02 .02 .02" animation-mixer></a-entity>
</a-marker>

<a-marker type='pattern' url='./assets/ar/data/pattern-2.patt' name="2" class="marker 2">
  <a-entity gltf-model="#gltf8" light="type: ambient; color: rgba(255,255,255,.3)" scale=".02 .02 .02" animation-mixer></a-entity>
</a-marker>

<a-marker type='pattern' url='./assets/ar/data/pattern-3.patt' name="3" class="marker 3">
  <a-entity gltf-model="#gltf8" light="type: ambient; color: #FFF" scale=".02 .02 .02" animation-mixer></a-entity>
</a-marker>

<a-marker type='pattern' url='./assets/ar/data/pattern-4.patt' name="4" class="marker 4">
  <a-entity gltf-model="#gltf8" light="color: #FFF; intensity: 1.5" scale=".02 .02 .02" animation-mixer></a-entity>
</a-marker>

<a-marker type='pattern' url='./assets/ar/data/pattern-5.patt' name="5" class="marker 5">
  <a-entity gltf-model="#gltf8" scale=".02 .02 .02" animation-mixer></a-entity>
</a-marker>

<a-marker type='pattern' url='./assets/ar/data/pattern-6.patt' name="6" class="marker 6">
  <a-entity gltf-model="#gltf8" scale=".02 .02 .02" animation-mixer></a-entity>
</a-marker>

<a-marker type='pattern' url='./assets/ar/data/pattern-next.patt' name="next" class="marker next">
  <a-entity gltf-model="#gltf8" scale=".02 .02 .02" animation-mixer></a-entity>
</a-marker>

<a-marker type='pattern' url='./assets/ar/data/pattern-colorsnew.patt' name="next" class="marker nextvertical">
  <a-entity gltf-model="#gltf9" scale=".02 .02 .02" animation-mixer></a-entity>
</a-marker>

<a-entity camera>
</a-entity>
</a-scene>
