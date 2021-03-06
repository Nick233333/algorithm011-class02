### 算法的作用

一个算法的优劣主要从算法的执行时间和所需要占用的存储空间两个方面来衡量。所对应的两个指标分别是「时间复杂度」与「空间复杂度」。算法就是用空间换时间，相比时间空间比较廉价。

### 大 O 表示法

算法的「时间复杂度」和「空间复杂度」合称为算法的复杂度。而衡量算法复杂度需要用到「大O表示法」。

「大O表示法」就是一个由 n 表示的函数（ n 代表输入量），通过不断扩大 n 的值，来渐进反应算法的复杂度。

算法复杂度有三个级别：最低、平均、最高。一般只看最高级别。

### 7 种算法复杂度

1. O(1): Constant Complexity 常数复杂度
2. O(log n): Logarithmic Complexity 对数复杂度 
3. O(n): Linear Complexity 线性时间复杂度 
4. O(n^2): N square Complexity 平方
5. O(n^3): N cubic Complexity 立方
6. O(2^n): Exponential Growth 指数
7. O(n!): Factorial 阶乘

### 学习算法的方法

- 画图
- 看优秀的高分的解法
- 刻意练习，寻找不同的解法
- 重复刷题形成肌肉记忆

### 数组和链表的特点

- 数组的元素在计算机内存都是连续的。
- 链表的元素在计算机内存是分开的，其中每个元素都存储了下一个元素的地址。
- 链表按结构有单向链表、双向链表、循环链表，按类型无序链表、有序链表、循环链表、环形链表。
- 数组的读取速度很快，查找时间复杂度为 `O(1)` ，添加修改删除为 `O(n)` 因为需要移动其他元素。
- 链表的添加修改和删除速度快，查找时间复杂度为 `O(n)` , 添加修改删除为 `O(1)` 因为链表每个节点都有数据和指针两个元素，可以通过指针快速找到链表的节点,而查找需要遍历整个链表所以速度比较慢。
- 在同一个数组中，所有元素的类型都必须相同(都为int、double等)。
- 数组为顺序存储，链表为链式存储。

**链表的分类**

1. 单向链表：不支持随机访问，O(1) 添加和删除，O(n)访问某个元素，比数组占用更多的空间
2. 双向链表：每个节点多了指向前一个节点的指针
3. 循环链表：尾节点指向头节点
4. 静态链表：用数组模拟的链表

### 栈和队列的特点

**栈**

- 特点：后进先出，O(1)入栈出栈。
- 应用：浏览器前进后退，括号匹配，表达式计算

**队列分类**

- 普通队列：先进先出，O(1)入队出队，LRU Cache， 操作有限资源。
- 双端队列：入口和出口都可以入队和出队。
- 优先队列：根据优先级出队。



