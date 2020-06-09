<template>
  <div>
    <strong>{{progressGroup.first.name}}</strong>
    <p class="text-muted mb-1">{{progressGroup.first.description}}</p>
    <div class="mb-3">
      <a-progress :percent="progressGroup.first.progress" :status="progressGroup.first.status"/>
    </div>
    <strong>{{progressGroup.second.name}}</strong>
    <p class="text-muted mb-1">{{progressGroup.second.description}}</p>
    <div class="mb-3">
      <a-progress :percent="progressGroup.second.progress" :status="progressGroup.second.status"/>
    </div>
    <strong>{{progressGroup.third.name}}</strong>
    <p class="text-muted mb-1">{{progressGroup.third.description}}</p>
    <div class="mb-3">
      <a-progress :percent="progressGroup.third.progress" :status="progressGroup.third.status"/>
    </div>
    <strong>{{progressGroup.fourth.name}}</strong>
    <p class="text-muted mb-1">{{progressGroup.fourth.description}}</p>
    <div class="mb-3">
      <a-progress :percent="progressGroup.fourth.progress" :status="progressGroup.fourth.status"/>
    </div>
    <strong>{{progressGroup.fives.name}}</strong>
    <p class="text-muted mb-1">{{progressGroup.fives.description}}</p>
    <div class="mb-3">
      <a-progress :percent="progressGroup.fives.progress"/>
    </div>
  </div>
</template>

<script>
import { progressGroup } from './data.json'

export default {
  name: 'CuiProgressGroup',
  data: function () {
    return {
      progressGroup,
    }
  },
}
</script>
