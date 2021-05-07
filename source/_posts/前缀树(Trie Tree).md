---
title: 字典树/前缀树(Trie Tree)
date: 2020 09-24 22:00:00
author: HsDodo
cover: https://cdn.jsdelivr.net/gh/HsDodo/blogImage/images/15.jpg
tags: 
     - 数据结构
     - 前缀树
     - Trie Tree
categories: 数据结构
keywords:	
	 - 单词查找树
	 - 字典树
	 - 前缀树
	 - Trie Tree

---
### 字典树/前缀树/单词查找树 (Trie Tree)

{% note green 'fas fa-fan' modern%}
简简单单的前缀树。
{% endnote %}


####  <font color='#ff7f50'>三向字典树(TST)  </font>
> 字典树又叫单词查找树,三向单词查找树中，每个节点都含有一个字符，三条链接和一个值。这三条链接分别对应着当前字母小于，等于和大于节点字母的所有键。三向单词查找树可以避免R向单词查找树过度的空间消耗.查找和插入时，首先比较键的首字母和根节点的字母，如果键的首字母较小，就选择左链接；如果较大，就选择右链接；如果相等就选择中链接。然后递归的使用相同的算法。查找时，如果遇到一个空链接或者当前键结束时节点的值为空，那么未命中；如果键结束时节点的值非空则查找命中。




```javascript
package 字典树;
import java.util.ArrayList;
import java.util.List;
/**
 * @作者 森
 * * @日期 2020-09-24
 * 三向单词查找树
 */
public class TST {
    Node head=null;
    class Node{//节点
        char ch;
        Node left,mid,right;//左中右分支
        int val;
      Node(){
          this.val=-1;
      }
      Node(char ch){
          this.ch=ch;
          this.val=-1;
      }
    }

    public void put(String[] words){
        for(int i=0;i<words.length;i++){
            head=put(head,words[i],0,i);
        }
    }

    private Node put(Node root,String word,int index,int value){
        //index表示该单词的第几个字符,value表示这个单词在单词表中第几个位置
        int len=word.length();
        char c=word.charAt(index);
        if(root ==null){
            root=new Node(c);
        }
        if(c<root.ch){
            root.left=put(root.left,word,index,value);
        }else if(c>root.ch){
            root.right=put(root.right,word,index,value);
        }else if(index<len-1){
            root.mid=put(root.mid,word,index+1,value);
        }else {
            root.val=value;
        }
        return root;
    }

    public int get(String word){
        Node node=get(this.tree.get(0),word,0);
        if(node==null) return -1;
        return node.val;
    }

    public Node get(Node root,String word,int index){
        int len=word.length();
        char ch=word.charAt(index);
        if(root==null) return null;
        if(ch<root.ch){//字符小于该节点字符  则从该节点右子节点查找
            return get(root.left,word,index);
        }else if(ch>root.ch){//字符大于该节点字符  则从该节点左子节点查找
            return get(root.right,word,index);
        }else if(index<len-1){//该字符等于该节点字符  则取该字符的下一个字符 从中间节点继续查找
            return get(root.mid,word,index+1);
        }else {
            //走到单词最末尾
            return root;
        }

    }

    public static void main(String[] args) {
        TST t=new TST();
        String[] words={"pig","dog","Java","apple"};
        t.put(words);
        System.out.println(t.get("Java"));

    }
}




```

<img src="/medias/images/TrieTree1.jpg" style="zoom:35%;" />

<img src="/medias/images/TrieTree2.jpg" style="zoom:67%;" />

---

####  <font color='#ff7f50'>R向字典树</font>

💫模板①

```javascript
package 字典树;

import java.awt.*;
import java.util.ArrayList;
import java.util.List;

/**
 * @作者 森
 * @日期 2020-09-21
 */
public class TrieTree {



    public List<Node> tree=new ArrayList<>();



    public  void insert(String word, int index){//往字典树里插单词
        int len=word.length(),cursor=0;//从字典树最开头的那个node节点开始往下存
        for(int i=0;i<len;i++){
            int x=word.charAt(i)-'a';//取当个字符，一个一个取
            if(tree.get(cursor).ch[x]==0){//如果这个字符节点没有的话就创建一个 0表示没有该节点的索引
                tree.add(new Node());
                tree.get(cursor).ch[x]=tree.size()-1;
                cursor=tree.size()-1;
            }else {
                cursor = tree.get(cursor).ch[x];
            }

        }
        tree.get(cursor).flag=index;
    }


    public int search(String word){
        int cursor=0;
        int len=word.length();
        StringBuffer sb=new StringBuffer();
        for (int i=0;i<len;i++){
            char t=word.charAt(i);
            sb.append(t);
            int x=word.charAt(i)-'a';//将字符转为对应数字
            if(tree.get(cursor).ch[x]!=0){
                cursor=tree.get(cursor).ch[x];
            }else {
                return -1;
            }
            if(i==len-1){
                System.out.println(sb.toString());
                return tree.get(cursor).flag;
            }
        }
        return -1;
    }
    public void printTree(){

    }

    public static void main(String[] args) {
        String[] words={"like","pig","dog","bird"};
        TrieTree test=new TrieTree();
        test.tree.add(new Node());
        for(int i=0;i<words.length;i++){
            test.insert(words[i],i);
        }

        System.out.println(test.search("bird"));

    }

}

class Node{//单个字符节点
    int[] ch=new int[26];
    int flag;

    public Node() {
        this.flag = -1;//flag =-1表示没有到该字符结尾的单词
    }
}
```

💫模板② ( 更好理解 )

```javascript
class Trie {
    Trie[] childrens;
    boolean isEnd;
    /** Initialize your data structure here. */
    public Trie() {
        childrens = new Trie[26];
        isEnd=false;
    }
    
    /** Inserts a word into the trie. */
    public void insert(String word) {
        Trie cur=this;
        int len=word.length();
        for(int i=0;i<len;i++){
            char ch=word.charAt(i);
            int index=ch-'a';
            if(cur.childrens[index]==null){
                cur.childrens[index]=new Trie();
            }
            cur=cur.childrens[index];
            if(i==len-1){
                cur.isEnd=true;
            }
        }
    }
    
    /** Returns if the word is in the trie. */
    public boolean search(String word) {
        Trie cur=this;
        int len=word.length();
        for(int i=0;i<len;i++){
            char ch=word.charAt(i);
            int index=ch-'a';
            if(cur.childrens[index]==null){
                return false;
            }else{
                cur=cur.childrens[index];
            }
            if(i==len-1){
                return cur.isEnd;
            }
        }
        return cur.isEnd;
    }
    
    /** Returns if there is any word in the trie that starts with the given prefix. */
    public boolean startsWith(String prefix) {
        Trie cur=this;
        int len=prefix.length();
        for(int i=0;i<len;i++){
            char ch=prefix.charAt(i);
            int index=ch-'a';
            if(cur.childrens[index]==null){
                return false;
            }
            cur=cur.childrens[index];
        }
        return true;

    }
}

/**
 * Your Trie object will be instantiated and called as such:
 * Trie obj = new Trie();
 * obj.insert(word);
 * boolean param_2 = obj.search(word);
 * boolean param_3 = obj.startsWith(prefix);
 */
```





