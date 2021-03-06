### 树

- 二叉树，又称为二叉搜索树，二叉有序树。指一棵空树或左子树所有节点均小于根节点的值，或右子树所有节点均大于根节点的值。

**树的遍历方式**

- 前序遍历：根左右
- 中序遍历：左根右
- 后序遍历：左右根

> 链表是特殊化的树，树是特殊化的图


### 图

- 图和树的区别是有环
- 图的属性有点和边。
- 图的分类：无向无权图、有向无权图、无向有权图
- 常见算法：最小生成树、最短路径、连通图个数、拓扑排序

### 堆

- 什么是堆：可以快速找到一堆数中最大值或最小值的数据结构
- 常见堆有：二叉堆、斐波那契堆
- 根节点最大堆称为大根堆或大尖堆
- 根节点最小堆称为小根堆或小尖堆

### 哈希表

- 什么是哈希表：哈希表又称为散列表，是根据 key value 进行访问的数据结构

### 递归

- 优点：代码简洁
- 缺点：重复计算
- 优化方式：缓存中间重复数据
- 注意点：要有退出条件，否则会造成死循环