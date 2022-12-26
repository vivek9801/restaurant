def mean(L):
    total = 0
    for x in L:
        total = x + total
    mean = total / len(L)
    return mean

def median(L):
    L.sort()
    if len(L) % 2 != 0:
        median = L[int(len(L)/2)]
    else:
        median =  L[int(len(L)/2) - 1] +  L[int(len(L)/2)]
        median = median/2
    return median
def mode(L):
    counti = 0
    num = L[0]
    for i in L:
        freq = L.count(i)
        if(freq > counti):
            counti = freq
            num = i
        if len(set(L)) == len(L):
            return 'no mode'
    return num
num_list = []
while(True):
    ask = input("Enter the marks and to leave press '0': ")
    if ask == '0':
        break
    num_list.append(int(ask))
mean = str(mean(num_list))
median = str(median(num_list))
mode = str(mode(num_list))
print("Mean = " +mean , "Median = " +median , "Mode = " +mode)
