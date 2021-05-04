---
title: Morris遍历
data: 2020 10-11 21:25:00
author: HsDodo
tags: 
  - Morris遍历
  - 二叉树遍历
categories: 算法
keywords: 博客
cover: https://cdn.jsdelivr.net/gh/HsDodo/blogImage/images/4.jpg
reprintPolicy: noreprint

---

## <font color='#ff7f50'>Morris遍历</font>

> 通常，实现二叉树的前序( preorder )、中序( inorder )、后序( postorder )遍历有两种常用方法: ① 递归  ② 栈 。这两种方法都是O(n)的空间复杂度 ( 递归本身占用 stack 空间 或者用户自定义的stack ),而Morri遍历可以使用O(1)的空间,而且可以在同样O(n)时间内完成.

----

###### 🦌**中序遍历**

> 步骤 :
>
> ①如果当前节点的左孩子为空，则输出当前节点并将其右孩子作为当前节点。
>
> ②如果当前节点的左孩子不为空，在当前节点的左子树中找到当前节点在中序遍历下的前驱节点。
>
> ​     a) 如果前驱节点的右孩子为空，将它的右孩子设置为当前节点。当前节点更新为当前节点的左孩子。
>
> ​      b) 如果前驱节点的右孩子为当前节点，将它的右孩子重新设为空（恢复树的形状）。输出当前节点（这里输出是因为是第二次到cur节点了 所以直接打印）。当前节点    更新为当前节点的右孩子。
>
> ③重复以上1、2直到当前节点为空。

<img src="/medias/images/Morris_in.jpg" style="zoom:80%;" />


###### 🐑**前序遍历**
​	

> 步骤 :
>
> ​	前序与中序就一行输出代码不同 其他相似
>
> ①如果当前节点的左孩子为空，则输出当前节点并将其右孩子作为当前节点。
>
> ②如果当前节点的左孩子不为空，在当前节点的左子树中找到当前节点在中序遍历下的前驱节点。
>
> ​     a) 如果前驱节点的右孩子为空，将它的右孩子设置为当前节点,输出当前节点(这里与中序不同)。当前节点更新为当前节点的左孩子。
>
> ​      b) 如果前驱节点的右孩子为当前节点，将它的右孩子重新设为空（恢复树的形状）,当前节点    更新为当前节点的右孩子。
>
> ③重复以上1、2直到当前节点为空。
>
> 如图所示( 从左到右 ，从上到下 ), cur 代表当前节点,深色节点表示该节点已经输出

<img src="/medias/images/Morris_pre.jpg" style="zoom:80%;" />

###### 🐫**后序遍历**

> 步骤 : 
>
> 后续遍历稍显复杂，需要建立一个临时节点dump，令其左孩子是root。并且还需要一个子过程，就是倒序输出某两个节点之间路径上的各个节点。
>
> 当前节点设置为临时节点dump。
>
> ① 如果当前节点的左孩子为空，则将其右孩子作为当前节点。
>
> ②如果当前节点的左孩子不为空，在当前节点的左子树中找到当前节点在中序遍历下的前驱节点。
>
> ​		a) 如果前驱节点的右孩子为空，将它的右孩子设置为当前节点。当前节点更新为当前节点的左孩子。
>
> ​		b) 如果前驱节点的右孩子为当前节点，将它的右孩子重新设为空。倒序输出从当前节点的左孩子到该前驱节点这条路径上的所有节点。当前节点更新为当前节点的右孩子。
>
> ③重复以上1、2直到当前节点为空。 
> 图示：

<img src="/medias/images/Morris_pos.jpg" style="zoom:80%;" />



----


```java
package Morris遍历;

import java.awt.*;

/**
 * @作者 森
 * @日期 2020-09-28
 */
public class MorrisTraversal {
    //二叉树节点的定义
    public static class Node{
        int val;
        Node left;
        Node right;
        public Node(int val) {
            this.val = val;
        }
    }

    public static Node getMostRight(Node root){ //获取root左分支的最右节点,也就是中序遍历的前驱节点
        if(root==null) return null;
        Node p=root.left;
        while(p.right!=null && p.right!=root){
               p=p.right;
        }
        return p;
    }

    
    //====================Morris中序遍历============================
    public static void morrisInorder(Node root){
        Node cur=root;
        while (cur!=null){
            if(cur.left==null){
                System.out.print(cur.val+" ");
                cur=cur.right;
            }else{
                Node cur2=getMostRight(cur);
                if(cur2.right==null){
                    cur2.right=cur;
                    cur=cur.left;
                }else{
                    cur2.right=null;
                    System.out.print(cur.val+" ");
                    cur=cur.right;
                }
            }
        }
    }
    
    //==========================Morris前序遍历======================
     public static void morrisPre(Node root){
        Node cur=root;
        while (cur!=null){
            if(cur.left==null){
                //如果左子树为空的话直接打印当前节点 ,并把当前节点设置为右节点
                System.out.print(cur.val+" ");
                cur=cur.right;
            }else{
                Node cur2=getMostRight(cur);
                if(cur2.right==null){//前序遍历在第一次到一个节点的时候打印出来
                    cur2.right=cur;//这里cur2.right==null说明是第一次到cur
                    System.out.print(cur.val+" ");
                    cur=cur.left;
                }else{
                    cur2.right=null;
                    cur=cur.right;
                }
            }
        }    
     }   
    //===========================Morris 后序遍历=============================
	                //后序比较麻烦一点
    public static void morrisPos(Node root){
		Node cur=root;
        while (cur!=null){
            if(cur.left==null){
                cur=cur.right;
            }else{
                Node cur2=getMostRight(cur);
                if(cur2.right==null){
                    cur2.right=cur;//这里cur2.right==null说明是第一次到cur
                    cur=cur.left;
                }else{
                    cur2.right=null;
                    printRightEdg(cur.left);//第二次回到cur节点,要打印cur左子树的右边界
                    cur=cur.right;
                }
            }
        }
        printRightEdg(root);
    }
    public static void printRightEdg(Node root){//逆序打印root 的右边界
		if(root==null) return;
        Node tail=reverse(root);//反转一次
        Node p=tail;
        while(p!=null){
            System.out.print(p.val+" ");
            p=p.right;
        }
     	reverse(tail);//恢复
    }

    public static Node reverse(Node root){ //反转 root的右边界
        if(root == null) return null;
        Node pre=null;
        Node from=null;
        Node next=root;
        while(next!=null){
            from=next;
            next=next.right;
            from.right=pre;
            pre=from;
        }
        return from;
    }

//========================================================================================
   
    public static void main(String[] args) {
        Node root=new Node(6);
        root.left=new Node(2);
        root.right=new Node(7);
        root.left.left=new Node(1);
        root.left.right=new Node(4);
        root.right.right=new Node(9);
        root.right.right.left=new Node(8);
        root.left.right.left=new Node(3);
        root.left.right.right=new Node(5);
        morrisInorder(root);
        System.out.println();
        morrisPre(root);
        System.out.println();
       	morrisPos(root);
    }

}

```





