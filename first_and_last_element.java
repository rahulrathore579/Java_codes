class Solution {
    public int[] searchRange(int[] nums, int target) {
        int[] new_arr=new int[2];
        new_arr[0]=-1;
        new_arr[1]=-1;
        for (int i =0;i<nums.length;i++){
            if(nums[i]==target){
                new_arr[0]=i;
                break;
            }
        }
        for(int j=nums.length-1;j>=0;j--){
            if(nums[j]==target){
                new_arr[1]=j;
                break;
            }
        }
        return new_arr;
    }
}